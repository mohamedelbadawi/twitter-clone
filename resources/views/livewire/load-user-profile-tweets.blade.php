<div wire:poll >
@foreach($tweets as $tweet)
    <!-- post starts -->
        <div class="post collapse multi-collapse" style="margin: 30px" id="tweets" >
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
                <div class="post__footer" >

                    <div>
                        <button style="background: none;border: none;" class="{{ (auth()->user()->isRetweeted($tweet->id))? 'text-success' : 'text-primary' }}" wire:click = "retweet({{$tweet->id}})">
                            <i class="fa-solid fa-repeat"></i>                        </button>
                        <span class="text-dark mr-1">{{$tweet->retweetsCount()}}</span>
                    </div>
                    <div>
                        <button style="background: none;border: none;" class="{{ (auth()->user()->isLiked($tweet->id))? 'text-danger' : 'text-primary' }}" wire:click = "like({{$tweet->id}})">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <span class="text-dark mr-1">{{$tweet->likesCount()}}</span>
                    </div>

                    <span class="material-icons"> publish </span>
                </div>
            </div>
        </div>
        <!-- post ends -->


    @endforeach
    @if($tweets->hasMorePages())
        <button wire:click="loadMore" type="button" class="btn btn-primary d-flex m-auto">LoadMore</button>
    @endif
{{--    Retweeted--}}
    @foreach($tweets as $tweet)
    <!-- post starts -->
        <div class="post" style="margin: 30px">
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
                <div class="post__footer" >

                    <div>
                        <button style="background: none;border: none;" class="{{ (auth()->user()->isRetweeted($tweet->id))? 'text-success' : 'text-primary' }}" wire:click = "retweet({{$tweet->id}})">
                            <i class="fa-solid fa-repeat"></i>                        </button>
                        <span class="text-dark mr-1">{{$tweet->retweetsCount()}}</span>
                    </div>
                    <div>
                        <button style="background: none;border: none;" class="{{ (auth()->user()->isLiked($tweet->id))? 'text-danger' : 'text-primary' }}" wire:click = "like({{$tweet->id}})">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        <span class="text-dark mr-1">{{$tweet->likesCount()}}</span>
                    </div>

                    <span class="material-icons"> publish </span>
                </div>
            </div>
        </div>
        <!-- post ends -->


    @endforeach
    @if($tweets->hasMorePages())
        <button wire:click="loadMore" type="button" class="btn btn-primary d-flex m-auto">LoadMore</button>
    @endif

</div>
