<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

@include('layouts.navigation')

    <div class="container-login">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login-form">
                <x-jet-label for="email" value="{{ __('Email') }}" class="label-login" />
                <x-jet-input id="email" class="block mt-1 w-full jordan-input1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4 login-form">
                <x-jet-label for="password" value="{{ __('Password') }}" class="label-login"/>
                <x-jet-input id="password" class="block mt-1 w-full jordan-input2" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4 login-form">
                <label for="remember_me" class="flex items-center label-login">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    <input id="remember_me" type="checkbox" class="form-checkbox jordan-input3" name="remember">
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 login-form">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color:#164a41;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="login-butt">
                    <x-jet-button class="ml-4 button" >
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>
