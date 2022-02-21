<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(TweetLike::class);
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }

    public function retweets()
    {
        return $this->hasMany(TweetRetweet::class);

    }

    public function retweetsCount()
    {
        return $this->retweets()->count();
    }



}
