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

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="login-form">
                    <x-jet-label for="name" value="{{ __('Name') }}" class="label-login"/>
                    <x-jet-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    style="
                    height: 2.5rem;
                    width: 20rem;
                    margin-left: 15rem;
                    "
                    />
                </div>

                <div class="mt-4 login-form">
                    <x-jet-label for="email" value="{{ __('Email') }}" class="label-login"/>
                    <x-jet-input id="email" class="" type="email" name="email" :value="old('email')" required 
                    style="
                    height: 2.5rem;
                    width: 20rem;
                    margin-left: 15.4rem;
                    "
                    />
                </div>

                <div class="mt-4 login-form">
                    <x-jet-label for="password" value="{{ __('Password') }}" class="label-login"/>
                    <x-jet-input id="password" class="" type="password" name="password" required autocomplete="new-password" 
                    style="
                    height: 2.5rem;
                    width: 20rem;
                    margin-left: 11.6rem;
                    "
                    />
                </div>

                <div class="mt-4 login-form">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="label-login"/>
                    <x-jet-input id="password_confirmation" class="" type="password" name="password_confirmation" required autocomplete="new-password" 
                    style="
                    height: 2.5rem;
                    width: 20rem;
                    margin-left: 4.2rem;
                    "
                    />
                </div>

                <div class="flex items-center justify-end mt-4 login-form">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:white;">
                        {{ __('Already registered?') }}
                    </a>
                    <div style="
                    padding-top: 2rem;
                    ">
                        <x-jet-button class="ml-4 ownb"
                        style="
                        margin-left: 47%;
                        margin-bottom: 20px;
                        width: 100px;
                        height: 50px;
                        font-size: 11px;
                        text-transform: uppercase;
                        letter-spacing: 2.5px;
                        font-weight: 500;
                        color: #000;
                        background-color: #fff;
                        border: 2px solid black;
                        border-radius: 45px;
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
                        transition: all 0.3s ease 0s;
                        cursor: pointer;
                        outline: none;
                        "
                        >
                            {{ __('Register') }}
                        </x-jet-button>
                        </div>

                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
