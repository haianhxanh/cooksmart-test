@extends('layouts.main')
@include('layouts.navigation')
<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>


<div class="profile-results container-login-profile">

    <div class="profile-management--off"
            id="profile-mng">
    
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot> --}}

        <div class="profile-management__header--off" 
        id="profile-header">
            <button class="button-profile">Profile</button>
        </div>
        
        <div class="profile-management__update--off"
                id="profile-update">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
    
                    <x-jet-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    
                {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
    
                    <x-jet-section-border />
                @endif --}}
    
                {{-- <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
    
                <x-jet-section-border />
    
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div> --}}
            </div>
    
        </div>
    </div>

    <div class="profile-fave">
        @if (Auth::check())
        <h5>Welcome back, {{ $user->name }}!</h5>
        @endif
    
        <h2>YOUR SMART RECIPES</h2>
    
        @if(empty($recipes))
            <h3>You currently have no favorite recipes. Explore more <a href="/search">here</a>!</h3>
        @else 
    
        <div class="container-wrap-card">
             @foreach ($recipes as $r)
            <div class="profile-cards-results">
                <div class="results-card-profile">
                    <h4 class="results-name-profile">{{ $r->name }}</h4>
                    <div class="profile-img"><img src="{{ $r->image_url }}" alt={{ $r->name }}/></div>
                    <div class="button-wrap">
                        <button class="results-btn-profile">
                            <a href="{{ action('RecipeController@show', $r->id) }}">View details</a>
                        </button>
                        <button class="results-btn-profile">
                            <a href="{{ action('UserController@deleteFavorite', $r->id) }}">Remove</a>
                        </button>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
    
        @endif
    </div>
</div> 

<script>
    const content = document.querySelector('.profile-fave');
    const management = document.getElementById('profile-mng');
    const header = document.querySelector('#profile-header');
    const update = document.querySelector('#profile-update');
    const profileBtn = document.querySelector('.button-profile');

    profileBtn.addEventListener('click', () => {

        management.classList.toggle('profile-management--off');
        header.classList.toggle('profile-management__header--off');
        update.classList.toggle('profile-management__update--off');
        // let click = 0;
        // click += 1;
        // if (click%2===1) {
        //     management.className = ('profile-management');
        //     header.className = ('profile-management__header');
        //     update.className = ('profile-management__update');
        // } else if (click%2===0){
    
        //     management.className = ('profile-management--off');
        //     header.className = ('profile-management__header--off');
        //     update.className = ('profile-management__update--off');
        // }
    });



</script>