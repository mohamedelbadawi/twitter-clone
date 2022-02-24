<?php

namespace App\Http\Controllers;
use App\Http\Requests\updateProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function editProfile(User $user)
    {
        return view('user.edit_profile',compact('user'));
    }

    public function updateProfile(updateProfile $request)
    {
        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        if ($request['password']!=null&&$request['password']!=''){
            $user->password=$request['password'];
        }
        $user->save();
        return redirect()->route('user.profile');
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
