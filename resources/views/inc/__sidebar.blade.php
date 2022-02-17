<!-- sidebar starts -->
<div class="sidebar">
    <i class="fab fa-twitter"></i>
    <div class="sidebarOption {{request()->routeIs('home')?'active':''}}">

        <span class="material-icons"> home </span>
        <a href="{{route('home')}}" style="text-decoration: none;background-color: transparent;"><h2>Home</h2></a>
    </div>

    <div class="sidebarOption">
        <span class="material-icons"> search </span>
        <h2>Explore</h2>
    </div>

    <div class="sidebarOption">
        <span class="material-icons"> notifications_none </span>
        <h2>Notifications</h2>
    </div>

{{--    <div class="sidebarOption">--}}
{{--        <span class="material-icons"> mail_outline </span>--}}
{{--        <h2>Messages</h2>--}}
{{--    </div>--}}

{{--    <div class="sidebarOption">--}}
{{--        <span class="material-icons"> bookmark_border </span>--}}
{{--        <h2>Bookmarks</h2>--}}
{{--    </div>--}}

{{--    <div class="sidebarOption">--}}
{{--        <span class="material-icons"> list_alt </span>--}}
{{--        <h2>Lists</h2>--}}
{{--    </div>--}}

    <div class="sidebarOption {{request()->routeIs('user')?'active':''}}">
        <span class="material-icons"> perm_identity </span>
        <a href="{{route('user.profile')}}" style="text-decoration: none;" class="{{request()->routeIs('user')?'active':''}}" ><h2>Profile</h2></a>
    </div>

{{--    <div class="sidebarOption">--}}
{{--        <span class="material-icons"> more_horiz </span>--}}
{{--        <h2>More</h2>--}}
{{--    </div>--}}
{{--    <button class="sidebar__tweet">Tweet</button>--}}
</div>
<!-- sidebar ends -->
