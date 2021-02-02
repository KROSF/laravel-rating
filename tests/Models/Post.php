<?php

namespace Krosf\LaravelRating\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Krosf\LaravelRating\Traits\Vote\Votable;
use Krosf\LaravelRating\Traits\Rate\Rateable;
use Krosf\LaravelRating\Traits\Like\Likeable;

class Post extends Model
{
    use Rateable, Votable, Likeable;

    protected $guarded = [];

    protected $table = 'users';
}
