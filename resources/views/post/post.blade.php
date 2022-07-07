<h1>this is dashboard </h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        {{ $LoggedUserInfo['email'] }}
    </li>
    <li class="nav-item">
        {{ $LoggedUserInfo['username'] }}
    </li>
</ul>
<a href="{{ route('auth.logout') }}">Logout</a>

