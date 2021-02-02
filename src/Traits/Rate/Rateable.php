<?php

namespace Krosf\LaravelRating\Traits\Rate;

use Krosf\LaravelRating\Models\Rating;

trait Rateable
{
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function ratingsAvg()
    {
        return $this->ratings()->avg('value');
    }

    public function ratingsCount()
    {
        return $this->ratings()->count();
    }
}