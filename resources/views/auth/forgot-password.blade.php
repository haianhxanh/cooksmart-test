<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

@include('layouts.navigation')

    <div class="container-login">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>

            <div class="mb-4 text-sm text-gray-600 forgot-form paragraph">
                {{ __('Forgot your password? Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
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
                    <x-jet-label for="email" value="{{ __('Email') }}" style="
                    color:#f1b24a;
                    font-weight: bold;
                    "/>
                    <x-jet-input id="email" class="block mt-1 w-full inputb" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <button class="my-own-btn">
                
                        {{ __('Email Password Reset Link') }}
                
                </button>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
<div>