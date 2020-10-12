<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia; 
use Spatie\MediaLibrary\Models\Media;

/**
 * App\Logo
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Site whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Logo extends Model implements HasMedia
{
    use HasMediaTrait;
    //
     // enable mass-assignment of fields
     protected $fillable = [ 'name'];

     public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('responsive')
            ->withResponsiveImages();

     
        $this->addMediaConversion('_320')
        ->width(320);
        $this->addMediaConversion('_720')
        ->width(720);
        $this->addMediaConversion('_1024')
        ->width(1024);
        $this->addMediaConversion('_1280')
        ->width(1280);
    }
}
