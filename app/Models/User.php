<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\True_;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function following()
    {
        return $this->belongsToMany(User::class,'follower_user','follower_id','following_id');
    }
    public function followers() {
        return $this->belongsToMany(User::class,'follower_user', 'following_id', 'follower_id');
    }

    public function isFollowing($user)
    {
     $following=$this->following->pluck('id')->toArray();
     if (in_array($user,$following)){
         return true;
     }
     return false;
    }

    public function followingTweets()
    {
        return $this->following->tweets();
    }

    public function likes()
    {
        return $this->hasMany(TweetLike::class);
    }
    public function isLiked($tweet)
    {
        $tweet_likes=$this->likes()->pluck('tweet_id')->toArray();
        if (in_array($tweet,$tweet_likes)){
            return true;

        }
        return false;
    }
}
