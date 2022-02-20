<!-- sidebar starts -->
<div class="sidebar">
    <i class="fab fa-twitter"></i>
    <div class="sidebarOption {{request()->routeIs('home')?'active':''}}">

        <span class="material-icons"> home </span>
        <a href="{{route('home')}}" style="text-decoration: none;background-color: transparent;"><h2>Home</h2></a>
    </div>

    <div class="sidebarOption">
        <span class="material-icons"> search </span>
        <a href="{{route('home.explore')}}" style="text-decoration: none;background-color: transparent;">

        <h2>Explore</h2>
        </a>
    </div>

    <div class="sidebarOption">
        <span class="material-icons"> notifications_none </span>
        <h2>Notifications</h2>
    </div>


    <div class="sidebarOption {{request()->routeIs('user')?'active':''}}">
        <span class="material-icons"> perm_identity </span>
        <a href="{{route('user.profile')}}" style="text-decoration: none;" class="{{request()->routeIs('user')?'active':''}}" ><h2>Profile</h2></a>
    </div>


</div>
<!-- sidebar ends -->
