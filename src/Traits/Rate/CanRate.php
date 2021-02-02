<?php

namespace Krosf\LaravelRating\Traits\Rate;

use LaravelRating;
use Krosf\LaravelRating\Models\Rating;

trait CanRate
{    
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'model');
    }

    public function rate($model, $value)
    {
        return LaravelRating::rate($this, $model, $value);
    }

    public function getRatingValue($model)
    {
        return LaravelRating::getRatingValue($this, $model);
    }

    public function isRated($model)
    {
        return LaravelRating::isRated($this, $model);
    }

    public function rated()
    {
        return LaravelRating::resolveRatedItems($this->ratings);
    }
}