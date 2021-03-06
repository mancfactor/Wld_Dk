<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contest;
use Carbon\Carbon;
use App\Http\Requests\ContestRequest;
use App\Tag;
use Exception;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Support\Arr;

class ContestController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $contests = Contest::latest('start_date')->paginate(10);

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

        //$mediaOptions = Media::where([['model_type','=',\App\Site::class], ['model_id', '=', 1]])->orderBy('name','asc')->pluck('name','id')->toArray();
        $mediaOptions = Media::where('model_type',\App\Site::class)->orderBy('name','asc')->pluck('name','id');
        $logoOptions = Media::where('model_type',\App\Logo::class)->orderBy('name','asc')->pluck('name','id');
        $logoOptions = collect(['' => 'No Logo Selected'] + $logoOptions->all());
        
        return view('contests.edit')->with('contest',$contest)
                    ->with('startDateDefault',$contest->getStartDate())
                    ->with('endDateDefault',$contest->getEndDate())
                    ->with('submitDateDefault',$contest->getSubmitDate())
                    ->with('voteDateDefault',$contest->getVoteDate())
                    ->with('tagsOptions',$tagsOptions)
                    ->with('tagsDefault',$tagsDefault)
                    ->with('logoOptions',$logoOptions)
                    ->with('mediaOptions',$mediaOptions);
    }

    public function create() {

        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = array();

        //$mediaOptions = Media::where([['model_type','=',\App\Site::class], ['model_id', '=', 1]])->orderBy('name','asc')->pluck('name','id')->toArray();
        $mediaOptions = Media::where('model_type',\App\Site::class)->orderBy('name','asc')->pluck('name','id');
        $logoOptions = Media::where('model_type',\App\Logo::class)->orderBy('name','asc')->pluck('name','id');
        //$mediaOptions = Arr::prepend($mediaOptions,"No Image Selected",0);
        $logoOptions = collect(['' => 'No Logo Selected'] + $logoOptions->all());

                
        return view('contests.create')
            ->with('contest',new Contest())
            ->with('startDateDefault',date('Y-m-d'))
            ->with('endDateDefault',date('Y-m-d'))
            ->with('submitDateDefault',date('Y-m-d'))
            ->with('voteDateDefault',date('Y-m-d'))
            ->with('tagsOptions',$tagsOptions)
            ->with('tagsDefault',$tagsDefault)
            ->with('logoOptions',$logoOptions)
            ->with('mediaOptions',$mediaOptions);
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

        $data = $request->all();
        if(is_null($data['steps_media_id']) || !($data['steps_media_id'])) {
            $data['steps_media_id'] = null;
        }
        if(is_null($data['intro_media1_id']) || !($data['intro_media1_id'])) {
            $data['intro_media1_id'] = null;
        }
        if(is_null($data['intro_media2_id']) || !($data['intro_media2_id'])) {
            $data['intro_media2_id'] = null;
        }
        if(is_null($data['logo_media_id']) || !($data['logo_media_id'])) {
            $data['logo_media_id'] = null;
        }
        $contest->update($data);
        $contest->tags()->sync($request->input('tags'));
        
        return redirect('contests');
    }
    
}
