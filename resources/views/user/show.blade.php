@extends('layouts.front')
@section('content')
    <div class="container-fluid mb-5">
        <img src="{{asset('/storage/'.auth()->user()->cover_name)}}" class="img-fluid" style="height: 40vh; width: 130vh" alt="...">
        <div class="profileimg">
            <img src="{{asset('storage/'.$user->image_name)}}" class="profile rounded" style="height: 15vh; width: 15vh" alt="">

        </div>
            <h5 class="mt-2 profileName">{{$user->name}}</h5>
            <p class="profileName  opacity-25" style="color: #4a5568"><span>@</span> {{$user->user_name}}</p>
     <div class="d-flex justify-content-center">
        @livewire('follow-button',['user'=>$user])
        <div class="d-flex justify-content-center ml-3 ">
            <a class="btn btn-primary text-light" href="{{route('user',$user->id)}}">Message <i class="fa-solid fa-message"></i></a>
        </div>
     </div>

    </div>
@livewire('followers-following',['user'=>$user])
    <div class="profile_create_tweet">

    </div>
    <div class="card mb-4">
        <div class="card-body">
          <h3>Tweets</h3>
        </div>
    </div>
    @livewire('load-user-profile-tweets',['userId'=>$user->id])
{{--    <livewire:scripts />--}}
@endsection
