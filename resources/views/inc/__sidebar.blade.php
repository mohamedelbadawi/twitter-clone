<!-- sidebar starts -->
<div class="sidebar ">
    <i class="fab fa-twitter"></i>
    <div class="sidebarOption {{request()->routeIs('home')?'active':''}}">

        <span class="material-icons"> home </span>
        <a href="{{route('home')}}" style="text-decoration: none;background-color: transparent; {{request()->routeIs('home')?'color:#50b7f5;':'color:black;'}}"><h2>Home</h2></a>
    </div>

    <div class="sidebarOption {{request()->routeIs('home.explore')?'active':''}}">
        <span class="material-icons"> search </span>
        <a href="{{route('home.explore')}}" style="text-decoration: none;background-color: transparent; {{request()->routeIs('home.explore')?'color:#50b7f5;':'color:black;'}}">

            <h2>Explore</h2>
        </a>
    </div>


    <div class="sidebarOption {{request()->routeIs('user.profile')?'active':''}}">
        <span class="material-icons"> perm_identity </span>
        <a href="{{route('user.profile')}}" style="text-decoration: none; {{request()->routeIs('user.profile')?'color:#50b7f5;':'color:black;'}}"
           class="{{request()->routeIs('user')?'active':''}}"><h2>Profile</h2></a>
    </div>

    <div class="sidebarOption " style="background: #50b7f5;color: white ; border-radius:20px ">
        <h2  class="m-auto">
        <a  style="color: white" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        </h2>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

</div>
<!-- sidebar ends -->
