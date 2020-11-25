@extends('layouts.main')

@include('layouts.navigation')

@section('content')

<div class="single-recipe-wrapper">
  <div class="single-recipe">
    <h2>{{ $recipe->name }}</h2>
    
    <form action="" method="post">
      @csrf
      <button type=submit>Add to favourite</button>
    </form> 

    <div class="single-recipe__description"><q>{{ $recipe->description }}</q></div>
  
    <div class="single-recipe__intro">
      
      <div class="single-recipe__info">
        <div class="info__time"><p>Cooking time: {{ $time }} minutes</p></div>
        <div class="info__cuisine"><p>{{ $cuisine }} cuisine</p></div>
        <div class="info__diet"><p>Diet info: @if ($diet) 
        {{ $diet }} 
        @else {{ 'No specific diet' }}
        @endif </p>
        </div>
  
      </div>
      <div class="single-recipe__image"><img src="{{ $recipe->image_url }}" alt=""></div>
  
    </div>
    
    <hr>
  
    <div class="single-recipe-body">
  
      <div class="single-recipe__ingredients">
        <h4>Ingredients you need</h4>
        <div class="single-recipe__ingredients-container">
          <ul>
             @for($i = 0; $i < count($combo); $i++)
               <li><p>{{ $quantity[$i] }} {{ $measurement[$i] }} {{ $ingredient[$i] }}
              @if (isset($preparation[$i])), {{ $preparation[$i] }} 
               
              @endif
              </p></li>
             @endfor
          </ul>
        </div>
      </div>
    
      <div class="single-recipe__steps">
        <h4>Let's cook!</h4>
        <ol>
          @foreach ($steps as $step)
              <div><li><p>{{ $step->step }}</p></li></div>
              <br>
          @endforeach
        </ol>
      </div>
  
    </div>

    <hr>
  
    <div class="single-recipe__media">
        
      <div class="single-recipe__video">
        <iframe id="ytplayer" type="text/html" width="640" height="360"
          src="{{ $recipe->video_url }}?autoplay=1&mute=1"
          frameborder="0">
        </iframe>
      </div>
  
    </div>
  
  </div>
</div>

<script>
  const zoomOnClick = document.querySelector('.single-recipe__image');
  zoomOnClick.addEventListener('click', () => {
    let click = 0;
    zoomOnClick.classList.toggle('zoom-in');
    if (click%2===1) {
        zoomOnClick.style.cursor = "zoom-out";
      }
      if (click%2===0) {
        zoomOnClick.style.cursor = "zoom-in";
    }
  })
</script>

@endsection