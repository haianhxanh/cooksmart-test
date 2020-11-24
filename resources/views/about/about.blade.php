@extends('layouts.main')
@include('layouts.navigation')
@section('content')

<div id="about-us">
    <h1>SEARCH</h1>
 </div>
 
 <script src="{{ mix('js/about.js') }}" >
</script>

@endsection

{{-- $info = [
    {   
        'id': 1,
        'img': '',
        'name': 'Hai Anh Nguyen',
        'favoriteFood': ''
    },
    {   
        'id': 2,
        'img': '',
        'name': 'Melissa Anne Genger',
        'favoriteFood': ''
    },
    {   
        'id': 1,
        'img': '',
        'name': 'Jordan Domovčijski',
        'favoriteFood': ''
    },
]
@foreach($info as $i) {
    <img src={{$i->img}} alt={{$i->name}} />
    <h3>{{$i->name}}</h3>

}
@endforeach --}}
