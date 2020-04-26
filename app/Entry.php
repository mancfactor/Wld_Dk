<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia; 
use Spatie\MediaLibrary\Models\Media;
use Laravelista\Comments\Commentable;
use Overtrue\LaravelFollow\Traits\CanBeVoted;

/**
 * App\Entry
 *
 * @property int $id
 * @property int $contest_id
 * @property string $name
 * @property string $description
 * @property int $approved
 * @property string|null $hashtag
 * @property int $view_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property string $designer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravelista\Comments\Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravelista\Comments\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \App\Contest $contest
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $downvoters
 * @property-read int|null $downvoters_count
 * @property-read mixed $tags_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $upvoters
 * @property-read int|null $upvoters_count
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $voters
 * @property-read int|null $voters_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry approved()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry notApproved()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereContestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereDesigner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereHashtag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereViewOrder($value)
 * @mixin \Eloquent
 */
class Entry extends Model implements HasMedia
{
    use HasMediaTrait, Commentable, CanBeVoted;

    // enable mass-assignment of fields
    protected $fillable = ['contest_id', 'user_id','name','description','designer','approved','hashtag','view_order'];
     
    /* Scopes to clean up where clauses */
    public function scopeApproved($query) {
        $query->where('approved', '=', 1);
    }

    /* Scopes to clean up where clauses */
    public function scopeNotApproved($query) {
        $query->where('approved', '!=', 1);
    }

    public function getApprovedText() {
        $text = "Pending";
        if($this->attributes['approved'] == 2) {
            $text = "Rejected";
        } elseif($this->attributes['approved'] == 1) {
            $text = "Approved";
        } else {
            $text = "Pending";
        }

        return $text;
    } 

    /***
     * Entry has a many to many relationship with Tags
     * Get the tags associated to the given entries
     */
    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
 
    /***
     * Get a list of tag ids for a given Entry
     */
    public function getTagsListAttribute() {
        return $this->tags->pluck('id');
    }

    /***
     * Entry has a contett
     */
    public function contest() {
        return $this->belongsTo('App\Contest');
    }

    /***
     * Entry has a user
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function registerMediaConversions(Media $media = null)
    {

        $this->addMediaConversion('responsive')
            ->withResponsiveImages();

        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(300);
            
        $this->addMediaConversion('_300')
        ->width(300);
        $this->addMediaConversion('_600')
        ->width(600);
        $this->addMediaConversion('_900')
        ->width(540);
        $this->addMediaConversion('_1080')
        ->width(1080);
        $this->addMediaConversion('_1200')
        ->width(1296);
        $this->addMediaConversion('_1440')
        ->width(1512);
        $this->addMediaConversion('_2048')
        ->width(2048);
    }
}
