@extends('layouts.main')

@include('layouts.navigation')

@section('content')
<div class="edit-form">
  <form method="post" class="edit-form-group" 
  action="{{action('RecipeController@update', $recipe->id)}}"
  >
    @method('put')
      @csrf
      <h1 class="edit-form-heading">Edit Recipe: {{ $recipe->name }}</h1>

      <div class="edit-form-group__item">

          <label for="name" class="edit-form-group__label">
            <span><h4>Edit name</h4></span>
          </label>

          <input type="text" name="name" class="edit-form-group__input" 
          value="{{ $recipe->name }}">

      </div>
  
  
      <div class="edit-form-group__item">

          <label for="cuisine_id" class="edit-form-group__label">
            <span><h4>Change cuisine</h4></span>
          </label>

          <select name="cuisine_id" id="" class="edit-form-group__select">
            @foreach ($cuisines as $c)
              <option value="{{ $c->id }}" 
                {{ $recipe->cuisine_id == $c->id ? 'selected' : '' }} 
                class="edit-form-group__option">{{ $c->name }}
              </option>
            @endforeach
          </select>   

      </div>
  
      <div class="edit-form-group__item">
          <label for="diet_id" class="edit-form-group__label">
            <span><h4>Change diet</h4></span>
          </label>

          <select name="diet_id" id="" class="edit-form-group__select">
              <option value="" class="edit-form-group__option">No specific diet</option>
              @foreach ($diets as $d)
                <option value="{{ $d->id }}"  
                  {{ $recipe->diet_id == $d->id ? 'selected' : '' }}
                  class="edit-form-group__option">{{ $d->name }}</option>
              @endforeach
          </select>   

      </div>
  
      <div class="edit-form-group__item"> 
          <label for="total_time_id" class="edit-form-group__label">
            <span><h4>Change cooking time</h4></span>
          </label>

          <select name="total_time_id" id="" class="edit-form-group__select">
            @foreach ($times as $t)
              <option value="{{ $t->id }}" 
                {{ $recipe->total_time_id == $t->id ? 'selected' : '' }}
                class="edit-form-group__option">{{ $t->time }} minutes</option>
            @endforeach
          </select>
      </div>
  
      
      <div class="edit-form-group__item">
          <label for="description" class="edit-form-group__label">
            <h4>Edit description</h4>
          </label>

          <textarea name="description" class="edit-form-group__textarea" placeholder="Insert a new description" rows="8">{{ $recipe->description }}</textarea>

      </div>
  
  
     <div class="edit-form-group__item media">
        <div class="edit-form-group__media">
            <h4>Edit image</h4>
            <label for="image" class="edit-form-group__label">
              <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}">
            </label>
  
            <input id="image" type="text" name="image" 
              value="{{ $recipe->image_url }}" 
              class="edit-form-group__input"/>
        </div>
    
    
        <div class="edit-form-group__media">
            <h4>Edit video</h4>
            <label for="video" class="edit-form-group__label">
              <iframe id="ytplayer" type="text/html" width="320" height="240"
              src="{{ $recipe->video_url }}?mute=1"
              frameborder="0">
              </iframe>
            </label>
  
            <input id="video" type="text" name="video" 
              value="{{ $recipe->video_url }}"
              class="edit-form-group__input"/>
  
        </div>
     </div>
  
      <div class="edit-form-group__item">
          <label for="source_url" class="edit-form-group__label">
              <h4>Edit source of the recipe</h4>
          </label>

          <input type="text" id="source_url" name="source_url"    value="{{ $recipe->source_url }}"
          class="edit-form-group__input"/>
      </div>
  
  
 
        <div class="edit-ingredient-list-wrapper">
          <h4 class="heading-center">Edit/Add ingredients</h4>
          <ol class="edit-ingredient-list">
             @foreach($recipe->ingredientMeasurementPreparationQuantities as $combo)
           
              <li class="combo-list-item">
                  <div class="ingredient-list-item">
                      <label for="ingredients" class="edit-form-group__label">
                        <span>Ingredient</span>
                      </label>
    
                      <select class="js-example-basic-multiple edit-form-group__select" name="ingredients[]">
                        @foreach($ingredients as $i)
                        <option value="{{ $i->id }}" {{ $i->id == $combo->ingredient_id ? 'selected' : ''}}>{{ $i->name }}</option>
                        @endforeach
                      </select>
                    
                  </div>  
    
    
                   <div class="ingredient-list-item">
                        <label for="quantities" class="edit-form-group__label">
                          <span>Quantity</span>
                        </label>
                        <select class="js-example-basic-multiple edit-form-group__select" name="quantities[]">
                          <option value="" class="edit-form-group__option">no quantity</option>
                          @foreach($quantities as $q)
                            <option value="{{ $q->id }}" {{ $q->id == $combo->quantity_id ? 'selected' : ''}}>{{ $q->amount }}</option>
                          @endforeach
                        </select>
                   </div>
       
              
                     <div class="ingredient-list-item">
                        <label for="measurements" class="edit-form-group__label">
                          <span>Measurement</span>
                        </label>
      
                        <select class="js-example-basic-multiple edit-form-group__select" name="measurements[]">
                            <option value="" class="edit-form-group__option">no measurement</option>
                            @foreach($measurements as $m)
                            <option value="{{ $m->id }}" {{ $m->id == $combo->measurement_id ? 'selected' : ''}}>{{ $m->name }}</option>
                            @endforeach
                          </select>
    
                      </div>
    
    
      
                      <div class="ingredient-list-item">
                        <label for="preparations" class="edit-form-group__label">
                          <span>Preparation</span>
                        </label>
      
                        <select class="js-example-basic-multiple edit-form-group__select" name="preparations[]">
                            <option value="" class="edit-form-group__option">no preparation</option>
                            @foreach($preparations as $p)
                            <option value="{{ $p->id }}" {{ $p->id == $combo->preparation_id ? 'selected' : ''}}>{{ $p->name }}</option>
                            @endforeach
                          </select>
                    
                      </div>

                      <div><button type="button" class="remove-combo">Remove</button></div>
              </li>
  
              @endforeach
            </ol>

            <div class="ingredient-list-btn__container"><button type="button" class="ingredient-list-btn">+</button></div>
         </div>
  
      


      <div class="edit-form-group__steps">
          <label for="step" class="edit-form-group__label">
            <h4 class="heading-center">Edit/Add steps</h4>
          </label>

          <ol class="steps-list">
              @foreach($recipe->steps as $step)
                 <li class="steps-list-item">
                    <textarea name="step[]" class="edit-form-group__textarea step-item">{{ $recipe->id == $step->recipe_id ? $step->step : '' }}</textarea>

                  <div><button type="button" class="remove-step">Remove</button></div>
                </li>
              @endforeach
            </ol>

              <div class="ingredient-list-btn__container"><button type="button" id="step-btn" class="ingredient-list-btn">+</button></div>
      </div>
  
  
      <div class="steps-btn"><button type="submit" class="btn-submit">Save changes</button></div>
  </form>

</div>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({tags: true});
    });
</script>


<script>
  const stepBtn = document.getElementById('step-btn');
  stepBtn.addEventListener('click', () => {
      const steps = document.querySelector('.steps-list');
      const input = document.createElement('li');
      input.className = "steps-list-item";
      input.innerHTML = ` 
        <textarea name="step[]" class="edit-form-group__textarea step-item"></textarea>
        <div><button type="button" class="remove-step">Remove</button></div>
      `;

      steps.appendChild(input);

      input.querySelector('.remove-step').addEventListener('click', () => {
      input.remove();
      })
  })

  const removeStepBtn = document.querySelectorAll('.remove-step');
  for (i = 0; i < removeStepBtn.length; i++) {
    const stepTextArea = document.querySelectorAll('.steps-list-item')[i];
    removeStepBtn[i].addEventListener('click', () => {
      stepTextArea.remove();
    })
  }

  const removeComboBtn = document.querySelectorAll('.remove-combo');
  for (i = 0; i < removeComboBtn.length; i++) {
    const comboArea = document.querySelectorAll('.combo-list-item')[i];
    removeComboBtn[i].addEventListener('click', () => {
      comboArea.remove();
    })
  }

  const ingredientListBtn = document.querySelector('.ingredient-list-btn');
  ingredientListBtn.addEventListener('click', () => {
      const ingredient = document.querySelector('.edit-ingredient-list');
      const input = document.createElement('li');
      input.className = 'combo-list-item';
      input.innerHTML += `

       <div class="ingredient-list-item">
          <label for="ingredients" class="edit-form-group__label">
            <span> Ingredient</span>
          </label>
              <select class="js-example-basic-multiple edit-form-group__select" name="ingredients[]">
                  @foreach ($ingredients as $i)        
                      <option value="{{ $i->id }}">{{ $i->name }}</option>
                  @endforeach
              </select>
       </div>
  
        
        <div class="ingredient-list-item">
          <label for="quantities" class="edit-form-group__label">
            <span>Quantity</span>
          </label>
              <select class="js-example-basic-multiple edit-form-group__select" name="quantities[]">
                <option value="" class="edit-form-group__option">no quantity</option>
                  @foreach ($quantities as $q)        
                      <option value="{{ $q->id }}">{{ $q->amount }}</option>
                  @endforeach
              </select>
        </div>
        
      <div class="ingredient-list-item">
          <label for="measurements" class="edit-form-group__label">
            <span>Measurement</span>
          </label>
              <select class="js-example-basic-multiple edit-form-group__select" name="measurements[]">
                  <option value="" class="edit-form-group__option">no measurement</option>
                  @foreach ($measurements as $m)        
                      <option value="{{ $m->id }}">{{ $m->name }}</option>
                  @endforeach
            </select>
      </div>
  
       <div class="ingredient-list-item">
          <label for="preparations" class="edit-form-group__label">
            <span>Preparation</span>
          </label>
              <select class="js-example-basic-multiple edit-form-group__select" name="preparations[]">
                      <option value="" class="edit-form-group__option">no preparation</option>
                  @foreach ($preparations as $p)        
                      <option value="{{ $p->id }}">{{ $p->name }}</option>
                  @endforeach
              </select>  
       </div>  
       <div><button type="button" class="remove-combo">Remove</button></div>

      `
      ingredient.appendChild(input);

      input.querySelector('.remove-combo').addEventListener('click', () => {
        input.remove();
      })

      $(document).ready(function() {
          $(input).find('.js-example-basic-multiple').select2({tags: true});
      });
  })

</script>

@endsection
