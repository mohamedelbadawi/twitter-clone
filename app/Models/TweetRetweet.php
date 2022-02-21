<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetRetweet extends Model
{
    use HasFactory;

    public function tweets()
    {
        return $this->belongsToMany(Tweet::class,'tweet_retweets','user_id','tweet_id');

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
