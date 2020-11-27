<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

    <div class="nav">
        <img src="{{ asset('img/logo/logo-large.svg') }}" class="nav__logo"/>
        <ul class="nav__container">
            <li><a href="/" class="nav__link">Home</a></li>
            <li><a href="/search" class="nav__link">Search</a></li>
            <li><a href="/recipes" class="nav__link">All recipes</a></li>
            <li><a href="/about" class="nav__link">About</a></li>
            @if(Auth::check())
            <li>
                <a href="/user/profile" class="nav__link">Profile</a>
            </li>

            @can('admin')
            <li>
                <a href="/admin" class="nav__link">Admin</a>
            </li>
            @endcan

            <li>
                <form action="/logout" method="post">
                  @csrf
                    <button type="submit" class="button-logout"><a style="color: black">Logout</a></button>
                </form>
            </li>

            @else
            
            <li><a href="/login" class="nav__link">Login</a></li>
            <li><a href="/register" class="nav__link">Register</a></li>
            @endif
        </ul>
    </div>
