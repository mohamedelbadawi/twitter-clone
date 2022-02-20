@extends('layouts.front')
@section('content')
    <div class="container-fluid mb-5">
        <img src="{{asset('images/car.jpg')}}" class="img-fluid" style="height: 40vh; width: 130vh" alt="...">
        <div class="profileimg">
            <img src="{{asset('images/profile.png')}}" class="profile rounded" style="height: 15vh; width: 15vh" alt="">

        </div>
            <h5 class="mt-2 profileName">{{$user->name}}</h5>
            <p class="profileName  opacity-25" style="color: #4a5568"><span>@</span> {{$user->user_name}}</p>
     @livewire('follow-button',['user'=>$user])
    </div>
@livewire('followers-following',['user'=>$user])
    <div class="profile_create_tweet">
{{--        @livewire('create-tweet')--}}
    </div>
    <div class="card mb-4">
        <div class="card-body">
          <h3>Tweets</h3>
        </div>
    </div>
    @livewire('load-user-profile-tweets',['userId'=>$user->id])
{{--    <livewire:scripts />--}}
@endsection
