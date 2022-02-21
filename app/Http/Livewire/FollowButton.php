<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FollowButton extends Component
{
    public $user;


    public function follow($userId)
    {

        $user=User::find($userId);
        $authUser=User::find(auth()->id());
        if (!$authUser->isFollowing($userId)){
       $authUser->following()->attach($userId);
        }
        else{
        $authUser->following()->detach($userId);
        }

    }
    public function render()
    {
        return view('livewire.follow-button');
    }
}
