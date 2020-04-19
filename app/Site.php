<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia; 
use Spatie\MediaLibrary\Models\Media;

/**
 * App\Site
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
class Site extends Model implements HasMedia
{
    use HasMediaTrait;
    //
     // enable mass-assignment of fields
     protected $fillable = [ 'name'];

     public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('responsive')
            ->withResponsiveImages();

        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200);
            
        $this->addMediaConversion('_180')
        ->width(180);
        $this->addMediaConversion('_360')
        ->width(360);
        $this->addMediaConversion('_540')
        ->width(540);
        $this->addMediaConversion('_720')
        ->width(720);
        $this->addMediaConversion('_900')
        ->width(900);
        $this->addMediaConversion('_1080')
        ->width(1080);
        $this->addMediaConversion('_1296')
        ->width(1296);
        $this->addMediaConversion('_1512')
        ->width(1512);
        $this->addMediaConversion('_1728')
        ->width(1728);
        $this->addMediaConversion('_2048')
        ->width(2048);
    }
}
