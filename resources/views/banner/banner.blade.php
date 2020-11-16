@extends('layouts.main')
@section('content')


<div id="app" >
    <div class="logo"></div>
        <div class="slogan">
        <h2>Smart recipes for dump people who are lazy to think</h2>
    </div>
    <div class="btn">
        <a href="{{action('RecipeController@create')}}"><button>Enter the awesomeness</button></a>
    </div>
</div>

{{-- <script src="{{ mix('js/banner.js') }}"></script> --}}
@endsection
