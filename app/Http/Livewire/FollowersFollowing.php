<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FollowersFollowing extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.followers-following');
    }
}
