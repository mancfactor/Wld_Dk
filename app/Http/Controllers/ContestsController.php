<?php

namespace App\Http\Controllers;

use App\Contest;
use App\Entry;
use App\Tag;
use App\Site;
use Exception;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use Illuminate\Support\Facades\Auth;
use Overtrue\LaravelFollow\FollowRelation;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Support\Facades\DB;

class ContestsController extends Controller
{
    private $contest;

    public function __construct() {
        ini_set('upload_max_filesize', '100M');
        $this->middleware('auth')->only('enterContest');
	
	try{
        
            $this->contest = Contest::active()->firstOrFail();


        } catch (Exception $e) {
            
        } 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.newsite3')->with('contest',$this->contest);
    }

    /**
     * Display a featured entries
     *
     * @return \Illuminate\Http\Response
     */
    public function featured()
    {
        $entries = Entry::approved()->where([['entries.contest_id','=',$this->contest->id]])->orderBy('created_at', 'desc')->paginate(9);
        $entries_votes = DB::table('entries')
        ->join('followables', function ($join){
            $join->on('entries.id', '=', 'followables.followable_id')
            ->where([['followables.followable_type','=',Entry::class],['entries.approved','=',1]]);
        })
        ->where([['entries.contest_id','=',$this->contest->id]])
        ->select('entries.id', DB::raw('count(*) as votes'))
        ->groupBy('entries.id')
        ->pluck('votes','id');;
        
        
        return view('front.white.featured')->with('entries',$entries)->with('entries_votes',$entries_votes);
    }


    /**
     * Display an entry
     *
     * @return \Illuminate\Http\Response
     */
    public function product($id)
    {
        $entry = Entry::approved()->findOrFail($id);
        $votes = FollowRelation::where([['followable_id','=',$id],['followable_type','=',Entry::class]])->get();

        return view('front.white.entry')->with('entry',$entry)->with('votes',$votes);
    }

    /**
     * Display an entry
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($id)
    {
        $entry = Entry::findOrFail($id);
        $votes = FollowRelation::where([['followable_id','=',$id],['followable_type','=',Entry::class]])->get();
                
        return view('front.white.entry')->with('entry',$entry)->with('votes',$votes);
    }

    public function test()
    {
        try{
            $entries = Entry::approved()->orderBy('created_at', 'desc')->paginate(9);
        } catch (Exception $e) {
            abort(404);
        }    
        
        return view('front.test')->with('contest',$this->contest)->with('entries', $entries);
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

        return view('front.rules');
    }

    public function enterContest()
    {
        $userId = auth()->user()->id;

        $entries = Entry::where('user_id',$userId)->paginate(9);

        $site = Site::where('name', ENV('SITE_NAME'))->first();
        
        return view('front.entercontest')->with('entries',$entries)->with('site',$site);
    }

    public function addEntry()
    {
        $userId = auth()->user()->id;
        $contestId = $this->contest->id;

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
                ini_set('max_execution_time', 120);
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

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    
}
