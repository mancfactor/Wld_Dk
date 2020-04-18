<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Contest
 *
 * @property int $id
 * @property string $name
 * @property string $slogan
 * @property string $description
 * @property int $active
 * @property \Illuminate\Support\Carbon $start_date
 * @property string $submit_date
 * @property string $vote_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property string|null $hashtag
 * @property string $how_it_work
 * @property string $rule
 * @property string $prize
 * @property int $view_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entry[] $entries
 * @property-read int|null $entries_count
 * @property-read mixed $tags_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest active()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest started()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHashtag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowItWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereRule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereSubmitDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereViewOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereVoteDate($value)
 * @mixin \Eloquent
 * @property string $contest_heading
 * @property string $menu_title
 * @property int|null $steps_media_id
 * @property string $step1_title
 * @property string $step1_body
 * @property string $step2_title
 * @property string $step2_body
 * @property string $step3_title
 * @property string $step3_body
 * @property string $video_heading
 * @property string $video_link
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereContestHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereMenuTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep1Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep2Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep3Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStep3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereStepsMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereVideoHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereVideoLink($value)
 */
class Contest extends Model
{
    // enable mass-assignment of fields
    protected $fillable = ['name','slogan','description','active','start_date','submit_date','vote_date','end_date','hashtag','how_it_work','rule','prize','contest_heading','menu_title','steps_media_id','step1_title','step1_body','step2_title','step2_body','step3_title','step3_body','video_heading','video_link','button1_text','button1_link','button2_text','button2_link','button3_text','button3_link','button4_text','button4_link','button5_text','button5_link','button6_text','button6_link'];
     
    // Convert to carbon instances
    protected $dates = ['start_date','end_date','submit_date','vote_date'];
 
    public function setStartDateAttribute($date) {
        $this->attributes['start_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function setEndDateAttribute($date) {
       $this->attributes['end_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }
 
    public function setSubmitDateAttribute($date) {
        $this->attributes['submit_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function setVoteDateAttribute($date) {
       $this->attributes['vote_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function getActiveText() {
        return $this->attributes['active'] ? "Yes": "No";
    }

    public function getStartDate() {
        return Carbon::parse($this->attributes['start_date'])->format('Y-m-d');
    }

    public function getEndDate() {
       return Carbon::parse($this->attributes['end_date'])->format('Y-m-d');
    }

    public function getEndDateText() {
        return Carbon::parse($this->attributes['end_date'])->format('F d, Y');
    } 

    public function getSubmitDate() {
        return Carbon::parse($this->attributes['submit_date'])->format('Y-m-d');
    }

    public function getSubmitDateText() {
        return Carbon::parse($this->attributes['submit_date'])->format('F d, Y');
    }

    public function getVoteDate() {
       return Carbon::parse($this->attributes['vote_date'])->format('Y-m-d');
    }

    public function getVoteDateText() {
        return Carbon::parse($this->attributes['vote_date'])->format('F d, Y');
    }
 
    // Scope is assigning a new to a where clause
    public function scopeStarted($query) {
        $query->where('start_date', '<=', Carbon::now());
    }
 
    /* Scopes to clean up where clauses */
    public function scopeActive($query) {
        $query->where('active', '=', 1);
    }
      
    /***
     * Contest has a many to many relationship with Tags
     * Get the tags associated to the given contest
     */
    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
 
    /***
     * Get a list of tag ids for a given contest
     */
    public function getTagsListAttribute() {
        return $this->tags->pluck('id');
    }

    /***
     * A contest can have many entries
     */
    public function entries() {
        return $this->hasMany('App\Entry');
    }
}
