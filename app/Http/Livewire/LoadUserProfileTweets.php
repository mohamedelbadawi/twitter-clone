<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LoadUserProfileTweets extends Component
{

    public $perPage=10;
    public $userId;

    public function like($tweet_id)
    {
        if (auth()->user()->isLiked($tweet_id)){
            DB::table('tweet_likes')->where('tweet_id',$tweet_id)->where('user_id',auth()->id())->delete();

        }
        else{
            DB::table('tweet_likes')->insert(['tweet_id'=>$tweet_id,
                'user_id'=>auth()->id()
            ]);

        }
    }

    public function retweet($tweet_id)
    {
     if (auth()->user()->isRetweeted($tweet_id)){
        DB::table('tweet_retweets')->where('tweet_id',$tweet_id)->where('user_id',auth()->id())->delete();
     }
     else{
         DB::table('tweet_retweets')->insert(['tweet_id'=>$tweet_id,
             'user_id'=>auth()->id()
         ]);
     }
    }
    public function mount($userId)
    {
    $this->userId= $userId;
    }
    public function loadMore()
    {
        $this->perPage+=10;
    }
    public function render()
    {
        $tweets=Tweet::where('user_id',$this->userId)->latest()->paginate($this->perPage);
        return view('livewire.load-user-profile-tweets',compact('tweets'));
    }
}
