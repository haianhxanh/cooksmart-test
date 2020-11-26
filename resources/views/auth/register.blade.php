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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="login-form">
                <x-jet-label for="name" value="{{ __('Name') }}" class="label-login"/>
                <x-jet-input id="name" class="block mt-1 w-full jordan-input22" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 login-form">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full jordan-input11" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 login-form">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full jordan-input4" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 login-form">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full jordan-input33" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4 login-form">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:#164a41;">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4 button-register">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>