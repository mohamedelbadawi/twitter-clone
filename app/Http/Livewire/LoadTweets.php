<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use App\Models\TweetRetweet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use function Symfony\Component\Translation\t;

class LoadTweets extends Component
{

    public $perPage=100;
    protected $listeners = ['tweetCreated' => 'render','increment'=>'render'];



    public function loadMore()
    {
       $this->perPage+=10;
       $this->emit('increment');
    }

    public function render()
    {
        $followingUsers=auth()->user()->following->pluck('id')->toArray();
        $tweets=Tweet::whereIn('user_id',$followingUsers)->latest()->paginate($this->perPage);

        return view('livewire.load-tweets',compact('tweets'));
    }
}
