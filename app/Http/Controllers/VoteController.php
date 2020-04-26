<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
use App\User;
use Carbon\Carbon;
use Overtrue\LaravelFollow\FollowRelation;

class VoteController extends Controller
{
    public function vote($id) {
            /*
            $entry = Entry::findOrFail($id);
            $user = User::Contestants()->inRandomOrder()->first();
            $user->upvote($entry);
            */
            $f = new FollowRelation();
            $f->user_id = Carbon::now()->getTimestamp();
            $f->followable_id = $id;
            $f->followable_type = 'App\\Entry';
            $f->relation = 'upvote';
            $f->save();

        
        return back();
    }
}
