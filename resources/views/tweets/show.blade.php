@extends('layouts.front')
@section('content')
    <div class="post mt-5" style="margin: 30px">
        <div class="post__avatar">
            <img
                src="{{asset('images/'.$tweet->user->image_name)}}" alt=""
            />
        </div>

        <div class="post__body">
            <div class="post__header">
                <div class="post__headerText">
                    <h3>
                        {{$tweet->user->name}}
                        <span class="post__headerSpecial"
                        ><span class="material-icons post__badge"> verified </span> <span>@</span>{{ $tweet->user->user_name }}</span
                        >
                    </h3>
                </div>
                <div class="post__headerDescription">
                    <p>{{$tweet->content}}</p>
                </div>
            </div>
            <img
                src="{{asset('/storage/'.$tweet->image_name)}}"
                alt=""
            />
            @livewire('tweet-footer',['tweet'=>$tweet])

        </div>
    </div>


  @livewire('create-comment',['tweet_id'=>$tweet->id,'parent_id'=>null,'button'=>'comment','btnColor'=>'primary'])

    @livewire('load-comments',['tweet_id'=>$tweet->id])

@endsection
