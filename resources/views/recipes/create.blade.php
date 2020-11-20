@extends('layouts.main')

@section('content')
<form method="post" class="form-group" action="{{action('RecipeController@store')}}">
    @csrf

    <div class="form-group__item">
        <label for="name" class="form-group__label">Recipe name
            <input type="text" name="name">
        </label>
    </div>


    <div class="form-group__item">
        <label for="cuisine_id" class="form-group__label">Cuisine
            <select name="cuisine_id" id="" class="form-group__select">
                @foreach ($cuisines as $c)
                    <option value="{{ $c->id }}" class="form-group__option">{{ $c->name }}</option>
                @endforeach
            </select>   
        </label>
    </div>

    <div class="form-group__item">
        <label for="diet_id" class="form-group__label">Diet
            <select name="diet_id" id="" class="form-group__select">
                <option value="{{ null }}" class="form-group__option">No specific diet</option>
                @foreach ($diets as $d)
                    <option value="{{ $d->id }}" class="form-group__option">{{ $d->name }}</option>
                @endforeach
            </select>   
        </label>
    </div>

    <div class="form-group__item"> 
        <label for="total_time_id" class="form-group__label">Total time
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
            <input id="image" type="text" name="image" value="Insert link to image"/>
        </label>
    </div>


    <div class="form-group__item">
        <label for="video" class="form-group__label">Video:
            <input id="video" type="text" name="video" value="Insert link to video"/>
        </label>
    </div>

    <div class="form-group__item">
        <label for="source_url" class="form-group__label">Source URL
            <input type="text" id="source_url" name="source_url" value="Insert source of the recipe"/>
        </label>
    </div>


    <div class="form-group__item">

       <div class="ingredient-list">
            <div>
                <label for="ingredients" class="form-group__label">Ingredient
                    <select class="js-example-basic-multiple" name="ingredients[]">
                        @foreach ($ingredients as $i)        
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                     </select>
                </label>

        
                <label for="ingredients" class="form-group__label">Quantity
                    <select class="js-example-basic-multiple" name="quantities[]">
                        @foreach ($quantities as $q)        
                            <option value="{{ $q->id }}">{{ $q->amount }}</option>
                        @endforeach
                     </select>
                </label>
        
                <label for="ingredients" class="form-group__label">Measurement
                    <select class="js-example-basic-multiple" name="measurements[]">
                        <option value="{{ null }}" class="form-group__option">no measurement</option>
                        @foreach ($measurements as $m)        
                            <option value="{{ $m->id }}">{{ $m->name }}</option>
                        @endforeach
                     </select>
                </label>

                <label for="preparations" class="form-group__label">Preparation
                    <select class="js-example-basic-multiple" name="preparations[]">
                        <option value="{{ null }}" class="form-group__option">no specific preparation</option>
                        @foreach ($preparations as $p)        
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                     </select>
                </label>

            </div>

       </div>

       <button type="button" class="ingredient-list-btn">+</button>

    </div>



    <div class="form-group__item">
        <label for="step" class="form-group__label">Steps
            <div class="steps">
                <textarea name="step[]" id="" cols="30" rows="5" class="form-group__textarea"></textarea>
            </div>
            <button type="button" id="step-btn">+</button>
        </label>
    </div>


    <button type="submit">Add your recipe!!</button>
</form>


<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2({tags: true});
    });
</script>

<script>
    const stepBtn = document.getElementById('step-btn');
    stepBtn.addEventListener('click', () => {
        const steps = document.querySelector('.steps');
        const input = document.createElement('textarea');
        input.name = 'step[]';
        input.rows = '5';
        input.cols = '30';
        steps.appendChild(input);
    })

    const ingredientListBtn = document.querySelector('.ingredient-list-btn');
    ingredientListBtn.addEventListener('click', () => {
        const ingredient = document.querySelector('.ingredient-list');
        const input = document.createElement('div');
        input.innerHTML = `
        <label for="ingredients" class="form-group__label">Ingredient
            <select class="js-example-basic-multiple" name="ingredients[]">
                @foreach ($ingredients as $i)        
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </select>
        </label>

        
        <label for="ingredients" class="form-group__label">Quantity
            <select class="js-example-basic-multiple" name="quantities[]">
                @foreach ($quantities as $q)        
                    <option value="{{ $q->id }}">{{ $q->amount }}</option>
                @endforeach
            </select>
        </label>
        
        <label for="ingredients" class="form-group__label">Measurement
            <select class="js-example-basic-multiple" name="measurements[]">
                <option value="" class="form-group__option">no measurement</option>
                @foreach ($measurements as $m)        
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            </select>
        </label>


        <label for="preparations" class="form-group__label">Preparation
            <select class="js-example-basic-multiple" name="preparations[]">
                    <option value="" class="form-group__option">no specific preparation</option>
                @foreach ($preparations as $p)        
                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                @endforeach
            </select>
        </label>
        
        `
        ingredient.appendChild(input);

        $(document).ready(function() {
            $(input).find('.js-example-basic-multiple').select2({tags: true});
        });
    })

</script>


@endsection
