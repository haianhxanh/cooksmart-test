@extends('layouts.main')

@include('layouts.navigation')

@section('content')
<div class="page-create"
    style="  padding: 5% 10% !important;
    background-image: url('../img/details-bg.png');
    background-size: cover;
    background-repeat: no-repeat;"
>
    <div class="form-create">
        @can('admin')
        <form method="post" class="form-group" action="{{action('RecipeController@store')}}">
            @csrf
            <h1 class="form-heading"><span class="hover">New recipe</span></h1>
            <div class="form__container">
                <div class="form-group__item">
                    <label for="name" class="form-group__label"><span class="hover">Recipe name</span>
                        <input type="text" name="name" class="form-input">
                    </label>
                </div>
        
        
                <div class="form-group__item">
                    <label for="cuisine_id" class="form-group__label"><span class="hover">Cuisine</span>
                        <select name="cuisine_id" id="" class="form-group__select">
                            @foreach ($cuisines as $c)
                                <option value="{{ $c->id }}" class="form-group__option">{{ $c->name }}</option>
                            @endforeach
                        </select>   
                    </label>
                </div>
        
                <div class="form-group__item">
                    <label for="diet_id" class="form-group__label"><span class="hover">Diet</span>
                        <select name="diet_id" id="" class="form-group__select-diet">
                            <option value="{{ null }}" class="form-group__option">No specific diet</option>
                            @foreach ($diets as $d)
                                <option value="{{ $d->id }}" class="form-group__option">{{ $d->name }}</option>
                            @endforeach
                        </select>   
                    </label>
                </div>
        
                <div class="form-group__item"> 
                    <label for="total_time_id" class="form-group__label"><span class="hover">Total time</span>
                        <select name="total_time_id" id="" class="form-group__select-time">
                            @foreach ($times as $t)
                                <option value="{{ $t->id }}" class="form-group__option">{{ $t->time }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
        
                
                <div class="form-group__item">
                    <label for="description" class="form-group__label"><span class="desctiption hover1">Description</span> 
                        <textarea name="description" class="form-group__textarea"></textarea>
                    </label>
                </div>
        
        
                <div class="form-group__item">
                    <label for="image" class="form-group__label"><span class="hover">Photo:</span>
                        <input id="image" type="text" name="image" value="Insert link to image" class="form-input-photo"/>
                    </label>
                </div>
        
        
                <div class="form-group__item">
                    <label for="video" class="form-group__label"><span class="hover">Video:</span>
                        <input id="video" type="text" name="video" value="Insert link to video" class="form-input-video"/>
                    </label>
                </div>
        
                <div class="form-group__item">
                    <label for="source_url" class="form-group__label"><span class="hover">Source URL</span>
                        <input type="text" id="source_url" name="source_url" value="Insert source of the recipe" class="form-input-url"/>
                    </label>
                </div>
        
        
                <div class="form-group__item-container">
           
                <div class="ingredient-list">
                    <label class="form-group__label"><span class="hover">Edit/Add Ingredients</span>
                    </label>
                    
                    <ol class="ingredient-list-items edit-ingredient-list">
                        <li class="combo-list-item">
                                <label for="ingredients" class="form-group__label"><span class="hover">Ingredient</span>
                                </label>
                                    <select class="js-example-basic-multiple" name="ingredients[]">
                                        @foreach ($ingredients as $i)        
                                            <option class="form-group__option" value="{{ $i->id }}">{{ $i->name }}</option>
                                        @endforeach
                                </select>
             
                        
                                <label for="ingredients" class="form-group__label"><span class="hover">Quantity</span>
                                </label>
                                    <select class="js-example-basic-multiple" name="quantities[]">
                                        <option value="" class="form-group__option">no quantity</option>
                                        @foreach ($quantities as $q)        
                                            <option class="form-group__option" value="{{ $q->id }}">{{ $q->amount }}</option>
                                        @endforeach
                                    </select>
             
                        
                                <label for="ingredients" class="form-group__label"><span class="hover">Measurement</span>
                                </label>
                                    <select class="js-example-basic-multiple" name="measurements[]">
                                        <option value="" class="form-group__option">no measurement</option>
                                        @foreach ($measurements as $m)        
                                            <option value="{{ $m->id }}">{{ $m->name }}</option>
                                        @endforeach
                                    </select>
                 
            
                                <label for="preparations" class="form-group__label"><span class="hover">Preparation</span>
                                </label>
                                    <select class="js-example-basic-multiple" name="preparations[]">
                                        <option value="" class="form-group__option">no preparation</option>
                                        @foreach ($preparations as $p)        
                                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                  
            
                                <div><button type="button" class="remove-combo">Remove</button></div>
                        </li>
        
                    </ol>
                </div>
                <button type="button" class="ingredient-list-btn">+</button>
                </div>
        
                
                <div class="form-group__item">
        
                    <label for="step" class="form-group__label"><span class="hover">Steps</span>
                    </label>
        
                       <ol class="steps-list">
                            <div>
                                <li class="steps-list-item">
                                    <div class="steps">
                                        <textarea name="step[]" id="" class="form-group__textarea"></textarea>
                                        <div><button type="button" class="remove-step">Remove</button></div>
                                    </div>
                                </li>
                            </div>
                       </ol>
        
                       <div><button type="button" id="step-btn" class="ingredient-list-btn-textarea">+</button></div>
        
                </div>
            </div>
            <button type="submit" class="btn-submit">Add recipe</button>
        </form>
        @endcan
    </div>

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
                        <div class="steps">
                            <textarea name="step[]" id="" class="form-group__textarea"></textarea>
                            <div><button type="button" class="remove-step">Remove</button></div>
                        </div>
        
               

        `

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
        <label for="ingredients" class="form-group__label"><span class="hover">Ingredient</span>
                        </label>
                            <select class="js-example-basic-multiple" name="ingredients[]">
                                @foreach ($ingredients as $i)        
                                    <option class="form-group__option" value="{{ $i->id }}">{{ $i->name }}</option>
                                @endforeach
                        </select>
     
                
                        <label for="ingredients" class="form-group__label"><span class="hover">Quantity</span>
                        </label>
                            <select class="js-example-basic-multiple" name="quantities[]">
                                <option value="" class="form-group__option">no quantity</option>
                                @foreach ($quantities as $q)        
                                    <option class="form-group__option" value="{{ $q->id }}">{{ $q->amount }}</option>
                                @endforeach
                            </select>
     
                
                        <label for="ingredients" class="form-group__label"><span class="hover">Measurement</span>
                        </label>
                            <select class="js-example-basic-multiple" name="measurements[]">
                                <option value="" class="form-group__option">no measurement</option>
                                @foreach ($measurements as $m)        
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                @endforeach
                            </select>
         
    
                        <label for="preparations" class="form-group__label"><span class="hover">Preparation</span>
                        </label>
                            <select class="js-example-basic-multiple" name="preparations[]">
                                <option value="" class="form-group__option">no specific preparation</option>
                                @foreach ($preparations as $p)        
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                            
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
