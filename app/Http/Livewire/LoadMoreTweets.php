<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class LoadMoreTweets extends Component
{
    public $perPage;
    public $page;
    public $loadMore=false;

    public function mount($page=null,$perPage=null)
    {
        $this->page=$page??1;
        $this->perPage=$perPage??10;
    }

    public function loadMore()
    {
        $this->page+=1;
        $this->loadMore=true;
    }

    public function render()
    {
        if(!$this->loadMore){
            return view('livewire.load-more-tweets');
        }
        else{
            $tweets=Tweet::with('user')->paginate($this->perPage,['*'],null,$this->page);
            return view('livewire.load-more-tweets',compact('tweets'));        }

    }
}
