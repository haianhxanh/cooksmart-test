@extends('layouts.main')
@section('content')
<h1>List of Recipes</h1>

    @if (Session::has('recipe_success_message'))
    <div class=“alert alert--success”>{{ Session::get('recipe_success_message') }}</div>
    @endif

    @foreach ($recipes as $r)
    <h1>{{ $r->name }}</h1>

    <h2>{{ $r->total_time_id }}</h2>

    <p>{{ $r->description }}</p>

    <div>{{ $r->video_url }}</div>

    <img src="{{ $r->image_url }}" alt="">
    @endforeach
@endsection