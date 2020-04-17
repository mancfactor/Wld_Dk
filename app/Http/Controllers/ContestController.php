<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use Carbon\Carbon;
use App\Http\Requests\ContestRequest;
use App\Tag;
use Exception;

class ContestController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $contests = Contest::latest('start_date')->active()->started()->get();

        return view('contests.index')->with('contests',$contests);
    }

    public function show($id) {
        try{
            $contest = Contest::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        return view('contests.show')->with('contest',$contest);
    }
    
    public function edit($id) {

        try{
            $contest = Contest::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }   
        
        
        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = $contest->getTagsListAttribute();

        return view('contests.edit')->with('contest',$contest)
                    ->with('startDateDefault',$contest->getStartDate())
                    ->with('endDateDefault',$contest->getEndDate())
                    ->with('submitDateDefault',$contest->getSubmitDate())
                    ->with('voteDateDefault',$contest->getVoteDate())
                    ->with('tagsOptions',$tagsOptions)
                    ->with('tagsDefault',$tagsDefault);
    }

    public function create() {

        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = array();
                
        return view('contests.create')->with('startDateDefault',date('Y-m-d'))->with('endDateDefault',date('Y-m-d'))->with('submitDateDefault',date('Y-m-d'))->with('voteDateDefault',date('Y-m-d'))->with('tagsOptions',$tagsOptions)->with('tagsDefault',$tagsDefault);
    }

    public function store(ContestRequest $request) {

        // Validation via FormRequest

        try{
            $c = Contest::create($request->all());
            $c->tags()->attach($request->input('tags'));
        } catch (Exception $e) {
            abort(404);
        }        

        flash()->success('Your Contest has been created');
        return redirect('contests');
    }

    public function update($id, ContestRequest $request) {

        try{
            $contest = Contest::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        $contest->update($request->all());
        $contest->tags()->sync($request->input('tags'));
        
        return redirect('contests');
    }
}
