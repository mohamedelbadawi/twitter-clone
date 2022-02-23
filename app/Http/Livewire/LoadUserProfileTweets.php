<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class LoadUserProfileTweets extends Component
{
    use WithPagination;

    public $perPage = 100;
    public $userId;

    protected $listeners = ['load-more' => 'loadMore'];

    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function getTweets()
    {
        return Tweet::where('user_id', $this->userId)->latest()->paginate($this->perPage);
    }

    public function loadMore()
    {
        $this->perPage =$this->perPage+ 10;

    }
    public function render()
    {
        return view('livewire.load-user-profile-tweets',['tweets'=>$this->getTweets()]);
    }

}
