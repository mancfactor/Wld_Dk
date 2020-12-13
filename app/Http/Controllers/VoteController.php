<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;
use App\User;
use App\Vote;
use Carbon\Carbon;
use Overtrue\LaravelFollow\FollowRelation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VoteController extends Controller
{
    public function vote($id) {
        
        $ip = request()->ip();
        $currentDate = Carbon::createFromFormat('Y-m-d', date('Y-m-d')); 
        $voteData = new Vote();
        $voteData->setEntryId($id);
        $voteData->setVoteDate($currentDate);
        $voteData->setIp(md5($ip));

        $vote = DB::table('votes')
                ->where('entry_id', '=', $voteData->getEntryId())
                ->where('vote_date', '=', $voteData->getVoteDate())
                ->where('ip','=',$voteData->getIp())
                ->first();


        if ($vote === null) {

            $f = new FollowRelation();
            $f->user_id = Carbon::now()->getTimestamp();
            $f->followable_id = $id;
            $f->followable_type = 'App\\Entry';
            $f->relation = 'upvote';
            $f->save();
            
            $voteData->save();
        }
        
        return back();
    }
}
