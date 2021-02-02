<?php

namespace Krosf\LaravelRating\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Krosf\LaravelRating\Traits\Rate\CanRate;
use Krosf\LaravelRating\Traits\Vote\CanVote;
use Krosf\LaravelRating\Traits\Like\CanLike;

class User extends Model
{
    use CanRate, CanVote, CanLike;

    protected $guarded = [];

    protected $table = 'users';
}
