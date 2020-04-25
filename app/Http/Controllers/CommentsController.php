<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravelista\Comments\Comment;
use Exception;

class CommentsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(10);

        return view('comments.index')->with('comments',$comments);
    }

    public function approve($id, $status) {
        try{
            $comments = Comment::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }    
        
        $comments->approved = $status;
        $comments->save();
        
        return redirect('/comments');
    }
}
