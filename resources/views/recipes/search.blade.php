@extends('layouts.main')
@include('layouts.navigation')
@section('content')

{{-- <h1>SEARCH</h1> --}}
 <div id="search-app"></div>
 
 <script src="{{ asset('js/search.js') }}" >
</script>

@endsection