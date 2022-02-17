<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class LoadTweets extends Component
{
    public $perPage=10;

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
