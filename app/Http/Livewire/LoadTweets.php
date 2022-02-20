<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LoadTweets extends Component
{

    public $perPage=10;
    public function like($tweet_id)
    {
        if (auth()->user()->isLiked($tweet_id)){
            DB::table('tweet_likes')->where('tweet_id',$tweet_id)->where('user_id',auth()->id())->delete();
//       dd(true);
        }
        else{
            DB::table('tweet_likes')->insert(['tweet_id'=>$tweet_id,
                'user_id'=>auth()->id()
            ]);

        }
    }
    public function loadMore()
    {
       $this->perPage+=10;
    }

    public function render()
    {
        $followingUsers=auth()->user()->following->pluck('id')->toArray();
        $tweets=Tweet::whereIn('user_id',$followingUsers)->latest()->paginate($this->perPage);
        return view('livewire.load-tweets',compact('tweets'));
    }
}
