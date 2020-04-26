<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
use App\User;
use Carbon\Carbon;
use Exception;

class VoteController extends Controller
{
    public function vote($id) {
        try{
            
            $entry = Entry::findOrFail($id);
            $user = User::Contestants()->inRandomOrder()->first();
            $user->upvote($entry);
        } catch (Exception $e) {
            abort(404);
        }        
        
        return back();
    }
}
