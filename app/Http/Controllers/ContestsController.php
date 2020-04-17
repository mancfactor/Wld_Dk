<?php

namespace App\Http\Controllers;

use App\Contest;
use App\Entry;
use App\Tag;
use Exception;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use Illuminate\Support\Facades\Auth;

class ContestsController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only('enterContest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $contestId = 1;

            $contest = Contest::active()->findOrFail($contestId);

        } catch (Exception $e) {
            abort(500);
        } 

        return view('front.newsite3')->with('contest',$contest);
    }

    /**
     * Display a featured entries
     *
     * @return \Illuminate\Http\Response
     */
    public function featured()
    {
        try{
            $entries = Entry::approved()->get();
        } catch (Exception $e) {
            abort(404);
        }    
        
        return view('front.white.featured')->with('entries',$entries);
    }


    /**
     * Display an entry
     *
     * @return \Illuminate\Http\Response
     */
    public function product($id)
    {
        try{
            $entry = Entry::approved()->findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
                
        return view('front.white.entry')->with('entry',$entry);
    }

    /**
     * Display an entry
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($id)
    {
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
                
        return view('front.white.entry')->with('entry',$entry);
    }

    public function test()
    {
        try{
            $entry = Entry::findOrFail(1);
        } catch (Exception $e) {
            abort(404);
        }    
        
        $media = $entry->getMedia('entries')[0];
        
        return view('front.white.resp')->with('media',$media);
    }

    public function steps()
    {
        return view('front.steps');
    }

    public function howtoenter()
    {
        return view('front.howtoenter');
    }

    public function prizes()
    {
        return view('front.prizes');
    }

    public function rules()
    {
        $user = auth()->user();

        print_r($user);

        if(is_object($user)) {
            print_r($user->id);
        } else {
            print_r('userNotFound');
        }
        return view('front.rules');
    }

    public function enterContest()
    {
        $userId = auth()->user()->id;

        $entries = Entry::all()->where('user_id',$userId);
        return view('front.entercontest')->with('entries',$entries);
    }

    public function addEntry()
    {
        $userId = auth()->user()->id;
        $contestId = 1;

        $contestOptions = Contest::active()->where('id',$contestId)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $contestDefault = 0;

        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = array();
                
        return view('front.entries.create')->with('contestId',$contestId)->with('contestOptions',$contestOptions)->with('contestDefault',$contestDefault)->with('tagsOptions',$tagsOptions)->with('tagsDefault',$tagsDefault);

    }

    public function storeEntries(Request $request) {

        $data = $request->all();

        $validateData = request()->validate([ 
            'contest_id' => 'required', 
            'name' => 'required|min:5',
            'designer' => 'required|min:5',
            'description' => 'required|min:10',
            'hashtag' => 'string|nullable']);
        $entry = new Entry;
        $entry->contest_id = $validateData['contest_id'];
        $entry->name = $validateData['name'];
        $entry->designer = $validateData['designer'];
        $entry->description = $validateData['description'];
        $entry->hashtag = $validateData['hashtag'];
        $entry->approved = 0;
        $entry->user_id = auth()->user()->id;
        $entry->save();
        $entry->tags()->attach($request->input('tags'));

        if (isset($data['media'])) {
	    	if($data['media']->getError() != 1) {    
	            $entry->addMediaFromRequest('media')->toMediaCollection('entries');
	        } else {
	            flash()->error('Media not valid');
	        }
        } 
        
        flash()->success('Your Entry has been created');
        return redirect('enter-contest');
    }

    public function editEntry($id) {

        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }   
        
        $contestOptions = Contest::active()
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $contestDefault = $entry->contest_id;
        
        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = $entry->getTagsListAttribute();

        return view('entries.edit')->with('entry',$entry)
                    ->with('contestOptions',$contestOptions)
                    ->with('contestDefault',$contestDefault)
                    ->with('tagsOptions',$tagsOptions)
                    ->with('tagsDefault',$tagsDefault);
    }
    public function updateEntries($id, EntryRequest $request) {

        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        $entry->update($request->all());
        $entry->tags()->sync($request->input('tags'));
        
        return redirect('entries');
    }

    public function showEntry($id) {
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
        
        return view('front.entries.show')->with('entry',$entry);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function show(Contest $contest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function edit(Contest $contest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contest $contest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contest $contest)
    {
        //
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    
}
