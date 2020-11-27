<head>
  <title>Cook Smart - Search</title>
</head>

@extends('layouts.main')
@include('layouts.navigation')
@section('content')

  <div id="search-app">

    <script src="{{ asset('js/search.js') }}" >
    </script>

    <script>
      const searchBtn = document.querySelector('.recipe-btn');
      searchBtn.addEventListener('click', () => {
        const message = document.querySelector('.check-out');
        message.style.display = "none";
      })
    </script>

  </div>

@endsection