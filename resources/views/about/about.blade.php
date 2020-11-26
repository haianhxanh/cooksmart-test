@extends('layouts.main')
@include('layouts.navigation')
@section('content')

<div class="about-container">

    <h1>About Us</h1>

    <div class="about-us">

    <div class="person">
        <div class="person-img"><img src={{asset('img/Hanka.jpg')}}/></div>
        <p class="person-name">Hai Anh Nguyen</p>
        <p class="hide"><strong>Favorite Food:</strong> Noodles, Seafood, Vegetables, Fruit</p>
        <p class="hide"><strong>Interests:</strong> traveling, swimming, coding</p>
    </div>

    <div class="person">
        <div class="person-img"><img src={{asset('img/Jordan2.jpg')}}/></div>
        <p class="person-name">Jordan Domovčijski</p>
        <p class="hide"><strong>Favorite Food:</strong> BBQ Ribs, Burgers, Pad Thai</p>
        <p class="hide"><strong>Interests:</strong> programming, traveling, working out<p>
    </div>

    <div class="person">
        <div class="person-img" ><img src={{asset('img/Melissa2.jpg')}}/></div>
        <p class="person-name">Melissa Anne Genger</p>
        <p class="hide"><strong>Favorite Food:</strong> Sushi, Mac & Cheese, Pad Thai</p>
        <p class="hide"><strong>Interests:</strong> traveling, wine, hiking, programming</p>
    </div>
   
</div>

</div>
@endsection

