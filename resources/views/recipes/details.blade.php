@extends('layouts.main')

@section('content')

<h2>{{ $recipe->name }}<h2>

<h3>{{ $recipe->description }}</h3>

<div><img style="width: 300px" src="{{ $recipe->image_url }}" alt=""></div>

<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="{{ $recipe->video_url }}?autoplay=1&mute=1"
  frameborder="0"></iframe>

@endsection