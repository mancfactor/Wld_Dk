<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Comment;

/**
 * App\EntryComment
 *
 * @property int $id
 * @property string|null $commenter_id
 * @property string|null $commenter_type
 * @property string|null $guest_name
 * @property string|null $guest_email
 * @property string $commentable_type
 * @property string $commentable_id
 * @property string $comment
 * @property bool $approved
 * @property int|null $child_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravelista\Comments\Comment[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commenter
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entry[] $entries
 * @property-read int|null $entries_count
 * @property-read \Laravelista\Comments\Comment|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereChildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereCommenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereCommenterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereGuestEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereGuestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EntryComment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EntryComment extends Comment
{

    protected $table = "comments";

    /***
     * Return entries for a given comment, one-to-many
     */
    public function entries() {
        return $this->belongsToMany('App\Entry', 'commentable_id');
    }
}