<head>
    <title>Cook Smart - About</title>
  </head>

@extends('layouts.main')
@include('layouts.navigation')
@section('content')

<div class="about-container">

    <h1>About Us</h1>

    <div class="about-us__container">

        <div id="about-us">
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



<div class="contact-container">
    <h2 class="heading">Contact us</h2>

    <form action="#">

    <div class="form-data">
        <div class="form-data-value">
            <label for="fname">First Name</label>
            <input type="text" name="firstname" id="fname">
        </div>

        <div class="form-data-value">
            <label for="lname">Last Name</label>
            <input type="text" name="lastname" id="lname"><br> 
        </div>

        <div class="form-data-value">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="form-data-value">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone">
        </div>
        </div>

    <div class="form-text">

        <p>Share with us your message:</p> <br>
        <textarea name="message" id="message" cols="20" rows="5"></textarea>

    </div>

    <div class="form-button">
        <button class="submit-button" type="submit" name="submit" id="submit">SEND MESSAGE</button>
    </div>

    </form>

</div>



</div>


@endsection

