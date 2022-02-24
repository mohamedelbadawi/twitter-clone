@extends('layouts.front')
@section('content')
    <div class="container-fluid mb-5">
        <img src="{{asset('/storage/'.auth()->user()->cover_name)}}" class="img-fluid" style="height: 40vh; width: 130vh" alt="...">
        <div class="profileimg">
            <img src="{{asset('/storage/'.auth()->user()->image_name)}}" class="profile rounded" style="height: 15vh; width: 15vh" alt="">

        </div>
        <h5 class="mt-2 profileName">{{auth()->user()->name}}</h5>
        <p class="profileName  opacity-25" style="color: #4a5568"><span>@</span> {{auth()->user()->user_name}}</p>

    </div>
    <div>

        <div class="d-flex justify-content-center ml-3 ">
            <a class="btn btn-primary text-light" href="{{route('user.edit.profile',auth()->user())}}">Edit profile <i class="fa-solid fa-pen-to-square"></i></a>
        </div>
        @livewire('followers-following',['user'=> auth()->user()])
    </div>
    <div class="profile_create_tweet">
        @livewire('create-tweet')
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <h3>Tweets</h3>
        </div>
    </div>
    @livewire('load-user-profile-tweets',['userId'=> auth()->id()])
    <livewire:scripts/>
@endsection
