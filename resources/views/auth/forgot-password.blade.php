<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<div class="nav">
        <img src="https://www.dropbox.com/s/1znnm2hkyaw6w7d/logo-large.png?raw=1" class="nav__logo"/>
        <ul class="nav__container">
            <li><a href="/" class="nav__link">Home</a></li>
            <li><a href="/search" class="nav__link">Search</a></li>
            <li><a href="/about" class="nav__link">About</a></li>
            <li><a href="/login" class="nav__link">Login</a></li>
            <li><a href="/register" class="nav__link">Register</a></li>
        </ul>
    </div>
    <div class="container-login">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>

            <div class="mb-4 text-sm text-gray-600 forgot-form">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block own">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full inputb" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <button class="my-own-btn">
                
                        {{ __('Email Password Reset Link') }}
                
                </button>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
<div>