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
 * @property string|null $button1_text
 * @property string|null $button1_link
 * @property string|null $button2_text
 * @property string|null $button2_link
 * @property string|null $button3_text
 * @property string|null $button3_link
 * @property string|null $button4_text
 * @property string|null $button4_link
 * @property string|null $button5_text
 * @property string|null $button5_link
 * @property string|null $button6_text
 * @property string|null $button6_link
 * @property int|null $intro_media1_id
 * @property string $intro_body1
 * @property string $intro_body2
 * @property string|null $intro_button1_text
 * @property string|null $intro_button1_link
 * @property int|null $intro_media2_id
 * @property string $intro_body3
 * @property string|null $intro_button2_text
 * @property string|null $intro_button2_link
 * @property string $how_title
 * @property string $how_body
 * @property string $how_step1_title
 * @property string $how_step1_body
 * @property string $how_step2_title
 * @property string $how_step2_body
 * @property string $how_step3_title
 * @property string $how_step3_body
 * @property string $rules_title
 * @property string $rules_body
 * @property string $prize_heading
 * @property string $prize_title
 * @property string $prize_first_title
 * @property string $prize_first_body
 * @property string $prize_second_title
 * @property string $prize_second_body
 * @property string $prize_third_title
 * @property string $prize_third_body
 * @property string $prize_special_title
 * @property string $prize_special_body
 * @property string $prize_voting_title
 * @property string $prize_voting_body
 * @property string $prize_elgible_title
 * @property string $prize_elgible_body
 * @property string $prize_commission_title
 * @property string $prize_commission_body
 * @property string $faq_heading
 * @property string $faq_qa1_title
 * @property string $faq_qa1_body
 * @property string $faq_qa2_title
 * @property string $faq_qa2_body
 * @property string $faq_qa3_title
 * @property string $faq_qa3_body
 * @property string $faq_qa4_title
 * @property string $faq_qa4_body
 * @property string $faq_qa5_title
 * @property string $faq_qa5_body
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton1Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton1Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton2Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton2Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton3Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton3Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton4Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton4Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton5Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton5Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton6Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereButton6Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa1Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa2Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa3Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa4Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa4Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa5Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereFaqQa5Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep1Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep2Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep3Body($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowStep3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereHowTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroBody1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroBody2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroBody3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroButton1Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroButton1Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroButton2Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroButton2Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroMedia1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereIntroMedia2Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeCommissionBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeCommissionTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeElgibleBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeElgibleTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeFirstBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeFirstTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeSecondBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeSecondTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeSpecialBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeSpecialTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeThirdBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeThirdTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeVotingBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest wherePrizeVotingTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereRulesBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contest whereRulesTitle($value)
 */
class Contest extends Model
{
    // enable mass-assignment of fields
    protected $fillable = [ 'name','slogan','description','active','start_date','submit_date','vote_date','end_date','hashtag','how_it_work','rule','prize','contest_heading','menu_title','steps_media_id','step1_title','step1_body','step2_title','step2_body','step3_title','step3_body','video_heading','video_link','button1_text','button1_link','button2_text','button2_link','button3_text','button3_link','button4_text','button4_link','button5_text','button5_link','button6_text','button6_link','intro_media1_id','intro_body1','intro_body2','intro_button1_text'
                            ,'intro_button1_link','intro_media2_id','intro_body3','intro_button2_text','intro_button2_link','how_title','how_body','how_step1_title','how_step1_body','how_step2_title','how_step2_body','how_step3_title','how_step3_body','rules_title','rules_body',
                            'prize_heading','prize_title','prize_body','prize_first_title','prize_first_body','prize_second_title','prize_second_body','prize_third_title','prize_third_body','prize_special_title','prize_special_body','prize_voting_title','prize_voting_body','prize_elgible_title','prize_elgible_body','prize_commission_title','prize_commission_body','faq_heading','faq_qa1_title','faq_qa1_body','faq_qa2_title','faq_qa2_body','faq_qa3_title','faq_qa3_body','faq_qa4_title','faq_qa4_body','faq_qa5_title','faq_qa5_body'];
     
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
