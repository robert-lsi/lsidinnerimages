<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations;

class Gallery extends Model implements HasMedia
{
    use HasMediaTrait;

    public function registerMediaConversions(Media $media = null){
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_FILL, 300, 300)
            ->background('FFFFFF')
            ->nonQueued();
    }
}
