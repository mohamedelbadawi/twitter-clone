@extends('layouts.front')
@section('content')
<div class="m-5">
    <form class="form-inline my-2 my-lg-0" method="get" action="{{route('explore.search')}}">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0 text-primary" type="submit">Search</button>
    </form>
</div>
@if(isset($users))
    @foreach($users as $user)
        <div class="card d-flex flex-row justify-content-between m-2">
            <div class="m-2">
            <img src="{{asset('images/profile.png')}}" class="" width="40px" height="40px">
            </div>

            <div class="card-body">
               <a href="{{route('user.show',$user)}}">
                {{$user->name}}
               </a>
                <p><span>@</span>{{$user->user_name}}</p>
            </div>
            <div class="mr-1 mt-3">
            @livewire('follow-button',['user'=>$user])
            </div>
        </div>

    @endforeach
@else
    <div class="ml-5">
        <h2>No users found</h2>
    </div>
@endif

@endsection
