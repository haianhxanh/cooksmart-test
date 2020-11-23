@extends('layouts.main')

@section('content')
<form method="post" class="form-group" 
action="{{action('RecipeController@update', $recipe->id)}}"
>
  @method('put')
    @csrf
    <h1 class="form-heading">Edit Recipe: {{ $recipe->name }}</h1>
    <div class="form-group__item">
        <label for="name" class="form-group__label">Recipe name
            <input type="text" name="name" class="form-input" value="{{ $recipe->name }}">
        </label>
    </div>


    <div class="form-group__item">
        <label for="cuisine_id" class="form-group__label">Cuisine: {{ $cuisine_of_selected_recipe}} </br>
          For changing cuisine, select below
            <select name="cuisine_id" id="" class="form-group__select">
              @foreach ($cuisines as $c)
                <option value="{{ $c->id }}" class="form-group__option">{{ $c->name }}</option>
              @endforeach

            </select>   
        </label>
    </div>

    <div class="form-group__item">
        <label for="diet_id" class="form-group__label">Diet: {{ $diet_of_selected_recipe }} </br>
            <select name="diet_id" id="" class="form-group__select">
                <option value="" class="form-group__option">No specific diet</option>
                @foreach ($diets as $d)
                  <option value="{{ $d->id }}" class="form-group__option">{{ $d->name }}</option>
              @endforeach
            </select>   
        </label>
    </div>

    <div class="form-group__item"> 
        <label for="total_time_id" class="form-group__label">Total time: {{ $time_of_selected_recipe }} minutes </br>
            <select name="total_time_id" id="" class="form-group__select">
              @foreach ($times as $t)
                <option value="{{ $t->id }}" class="form-group__option">{{ $t->time }}</option>
              @endforeach
            </select>
        </label>
    </div>

    
    <div class="form-group__item">
        <label for="description" class="form-group__label">Description
            <textarea name="description" class="form-group__textarea"></textarea>
        </label>
    </div>


    <div class="form-group__item">
        <label for="image" class="form-group__label">Photo:
            <input id="image" type="text" name="image" value="Insert link to image" class="form-input"/>
        </label>
    </div>


    <div class="form-group__item">
        <label for="video" class="form-group__label">Video:
            <input id="video" type="text" name="video" value="Insert link to video" class="form-input"/>
        </label>
    </div>

    <div class="form-group__item">
        <label for="source_url" class="form-group__label">Source URL
            <input type="text" id="source_url" name="source_url" value="Insert source of the recipe" class="form-input"/>
        </label>
    </div>


    <div class="form-group__item">

       <div class="ingredient-list">
         @foreach($recipe->ingredientMeasurementPreparationQuantities as $combo)
            <div class="ingredient-list-items">
                <label for="ingredients" class="form-group__label">Ingredient
                    <select class="js-example-basic-multiple" name="ingredients[]">
                      @foreach($ingredients as $i)
                      <option value="{{ $i->id }}" {{ $i->id == $combo->ingredient_id ? 'selected' : ''}}>{{ $i->name }}</option>
                      @endforeach
                     </select>
                </label>
        
                <label for="ingredients" class="form-group__label">Quantity
                    <select class="js-example-basic-multiple" name="quantities[]">
                      @foreach($quantities as $q)
                        <option value="{{ $q->id }}" {{ $q->id == $combo->quantity_id ? 'selected' : ''}}>{{ $q->amount }}</option>
                      @endforeach
                     </select>
                </label>
        
                <label for="ingredients" class="form-group__label">Measurement
                    <select class="js-example-basic-multiple" name="measurements[]">
                        <option value="" class="form-group__option">no measurement</option>
                        @foreach($measurements as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $combo->measurement_id ? 'selected' : ''}}>{{ $m->name }}</option>
                        @endforeach
                     </select>
                </label>

                <label for="preparations" class="form-group__label">Preparation
                    <select class="js-example-basic-multiple" name="preparations[]">
                        <option value="" class="form-group__option">no specific preparation</option>
                        @foreach($preparations as $p)
                        <option value="{{ $p->id }}" {{ $p->id == $combo->preparation_id ? 'selected' : ''}}>{{ $p->name }}</option>
                        @endforeach
                     </select>
                </label>

            </div>
          @endforeach
       </div>

       <button type="button" class="ingredient-list-btn">+</button>

    </div>



    <div class="form-group__item">
        <label for="step" class="form-group__label">Steps
            <div class="steps">
           
 
            </div>
            <button type="button" id="step-btn" class="ingredient-list-btn">+</button>
        </label>
    </div>


    <button type="submit" class="btn-submit">Save changes</button>
</form>


<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({tags: true});
    });
</script>



@endsection
