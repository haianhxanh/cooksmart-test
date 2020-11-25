<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

    <div class="nav">
        <img src="https://www.dropbox.com/s/1znnm2hkyaw6w7d/logo-large.png?raw=1" class="nav__logo"/>
        <ul class="nav__container">
            <li><a href="/" class="nav__link">Home</a></li>
            <li><a href="/search" class="nav__link">Search</a></li>
            <li><a href="/about" class="nav__link">About</a></li>
            @if(Auth::check())
            <li>
                <a href="/user/profile" class="nav__link">Profile</a>
            </li>

            <li>
                <form action="/logout" method="post">
                  @csrf
                    <button type="submit"><a style="color: black" class="nav__link">Logout</a></button>
                </form>
              </li>
            @else
            <li><a href="/login" class="nav__link">Login</a></li>
            <li><a href="/register" class="nav__link">Register</a></li>
            @endif
        </ul>
    </div>
