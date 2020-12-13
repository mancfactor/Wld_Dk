<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Contest
 *
 * @property int $id
 * @property int $id
 * @property \Illuminate\Support\Carbon $vote_date
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereVoteDate($value)
 * @mixin \Eloquent
 */
class Vote extends Model
{

    protected $table = "votes";
    
    // enable mass-assignment of fields
    protected $fillable = [ 'entry_id','vote_date', 'ip'];                     
     
    // Convert to carbon instances
    protected $dates = ['vote_date'];
 
    public function setVoteDateAttribute($date) {
       $this->attributes['vote_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function getVoteDate() {
       return Carbon::parse($this->attributes['vote_date'])->format('Y-m-d');
    }

    public function setVoteDate($date) {
        return$this->attributes['vote_date'] = $date;
     }

    public function getVoteDateText() {
        return Carbon::parse($this->attributes['vote_date'])->format('F d, Y');
    }

    public function setEntryId($date) {
        $this->attributes['entry_id'] =  $date;
     }
 
     public function getEntryId() {
        return $this->attributes['entry_id'];
     }

     public function setIp($date) {
        $this->attributes['ip'] =  $date;
     }
 
     public function getIp() {
        return $this->attributes['ip'];
     }


}
