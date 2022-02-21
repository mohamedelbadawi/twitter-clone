<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function show(User $user)
    {
        if ($user->id == auth()->id()){
            return redirect()->route('user.profile');
        }
        return view('user.show',compact('user'));
    }

    public function search(Request $request)
    {
        $users = User::query()
            ->where('name', 'LIKE', "%{$request->input('search')}%")
            ->orWhere('email', 'LIKE', "%{$request->input('search')}%")
            ->get();

        return view('explore',compact('users'));
    }
}
