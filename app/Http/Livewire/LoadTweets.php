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
        $tweets=Tweet::with('user')->latest()->paginate($this->perPage);
        return view('livewire.load-tweets',compact('tweets'));
    }
}
