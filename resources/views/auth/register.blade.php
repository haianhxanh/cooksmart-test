<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Cook Smart - Register</title>
    
</head>

@include('layouts.navigation')


<div class="container-login">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" style="font-size: 1.2rem;">
            @csrf

            <div class="login-form">
                <div><x-jet-label for="name" value="{{ __('Name') }}" class="label-login"/></div>
                <div><x-jet-input id="name" class="block mt-1 w-full jordan-input22" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /></div>
            </div>

            <div class="mt-4 login-form">
                <div><x-jet-label for="email" value="{{ __('Email') }}" /></div>
                <div><x-jet-input id="email" class="block mt-1 w-full jordan-input11" type="email" name="email" :value="old('email')" required /></div>
            </div>

            <div class="mt-4 login-form">
                <div><x-jet-label for="password" value="{{ __('Password') }}" /></div>
                <div><x-jet-input id="password" class="block mt-1 w-full jordan-input4" type="password" name="password" required autocomplete="new-password" /></div>
            </div>

            <div class="mt-4 login-form">
                <div><x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /></div>
                <div><x-jet-input id="password_confirmation" class="block mt-1 w-full jordan-input33" type="password" name="password_confirmation" required autocomplete="new-password" /></div>
            </div>

            <div style="padding-bottom: 2rem" class="flex items-center justify-end mt-4 login-form">


                <div>
                    <button class="ml-4 button-register">
                        {{ __('Register') }}
                    </button>
                </div>

                <div>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:#164a41;">
                        {{ __('Already registered?') }}
                        - Login here
                    </a>
                </div>

            </div>



        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>