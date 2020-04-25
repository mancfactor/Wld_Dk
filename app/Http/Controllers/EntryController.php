<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;
use App\Entry;
use Carbon\Carbon;
use App\Http\Requests\EntryRequest;
use App\Tag;
use Jorenvh\Share\Share;
use Exception;

class EntryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $entries = Entry::paginate(10);

        return view('entries.index')->with('entries',$entries);
    }

    public function show($id) {
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
        
        $share = new Share();
        $links = $share->page('http://withlovedarling.com', 'Share Entry', [],'<div id="social-links"><ul class="social-links plain">')
        ->facebook()
        ->twitter()
        ->pinterest()
        ->whatsapp();
        
        return view('entries.show')->with('entry',$entry)->with('share',$links);
    }
    
    public function edit($id) {

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

    public function addMedia($id) {
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        return view('entries.addmedia')->with('entry',$entry);
    }


    
    

    public function create() {

        $contestOptions = Contest::active()
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $contestDefault = 0;

        $tagsOptions = Tag::where('active', 1)
        ->orderBy('name', 'asc')
        ->pluck('name','id');
        $tagsDefault = array();
                
        return view('entries.create')->with('contestOptions',$contestOptions)->with('contestDefault',$contestDefault)->with('tagsOptions',$tagsOptions)->with('tagsDefault',$tagsDefault);
    }

    public function store(Request $request) {

        $data = $request->all();

        $validateData = request()->validate([ 
            'contest_id' => 'required', 
            'name' => 'required|min:5',
            'designer' => 'required|min:5',
            'description' => 'required|min:10']);
        $entry = Entry::create($validateData);
        $entry->tags()->attach($request->input('tags'));

        if (isset($data['media'])) {
	    	if($data['media']->getError() != 1) {    
	            $entry->addMediaFromRequest('media')->toMediaCollection('entries');
	        } else {
	            flash()->error('Media not valid');
	        }
        } 
        
        flash()->success('Your Entry has been created');
        return redirect('entries');
    }

    public function update($id, EntryRequest $request) {

        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        $entry->update($request->all());
        $entry->tags()->sync($request->input('tags'));
        
        return redirect('entries');
    }

    public function updateMedia($id, Request $request) {

        
        $data = $request->all();
       
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        if (isset($data['media'])) {
              if($data['media']->getError() != 1) {
		        $entry->addMediaFromRequest('media')->toMediaCollection('entries');
        	} else {
		        flash()->error('Media not valid');
            }
        }
        
        return redirect('entries');
    }

    public function approve($id, $status) {
        try{
            $entry = Entry::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
        
        $entry->approved = $status;
        $entry->save();
        
        return redirect('entries');
    }
}

