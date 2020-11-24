@extends('layouts.main')

@section('content')
<form method="post" class="form-group" action="{{action('RecipeController@store')}}">
    @csrf
    <h1 class="form-heading"><span class="hover">Create your recipe</span></h1>
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
                <div class="ingredient-list-items">
                    <label for="ingredients" class="form-group__label"><span class="hover">Ingredient</span>
                        <select class="js-example-basic-multiple" name="ingredients[]">
                            @foreach ($ingredients as $i)        
                                <option class="form-group__option" value="{{ $i->id }}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                    </label>

            
                    <label for="ingredients" class="form-group__label"><span class="hover">Quantity</span>
                        <select class="js-example-basic-multiple" name="quantities[]">
                            @foreach ($quantities as $q)        
                                <option class="form-group__option" value="{{ $q->id }}">{{ $q->amount }}</option>
                            @endforeach
                        </select>
                    </label>
            
                    <label for="ingredients" class="form-group__label"><span class="hover">Measurement</span>
                        <select class="js-example-basic-multiple" name="measurements[]">
                            <option value="{{ null }}" class="form-group__option">no measurement</option>
                            @foreach ($measurements as $m)        
                                <option value="{{ $m->id }}">{{ $m->name }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label for="preparations" class="form-group__label"><span class="hover">Preparation</span>
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
            <label for="step" class="form-group__label"><span class="hover">Steps</span>
                <div class="steps">
                    <textarea name="step[]" id="" cols="30" rows="5" class="form-group__textarea"></textarea>
                </div>
                <button type="button" id="step-btn" class="ingredient-list-btn-textarea">+</button>
            </label>
        </div>
    </div>
    <button type="submit" class="btn-submit">Add your recipe!!</button>
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
        input.className = "form-group__textarea";
        steps.appendChild(input);
    })

    const ingredientListBtn = document.querySelector('.ingredient-list-btn');
    ingredientListBtn.addEventListener('click', () => {
        const ingredient = document.querySelector('.ingredient-list');
        const input = document.createElement('div');
        input.innerHTML = `
        <label for="ingredients" class="form-group__label hover">Ingredient
            <select class="js-example-basic-multiple" name="ingredients[]">
                @foreach ($ingredients as $i)        
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </select>
        </label>

        
        <label for="ingredients" class="form-group__label hover">Quantity
            <select class="js-example-basic-multiple" name="quantities[]">
                @foreach ($quantities as $q)        
                    <option value="{{ $q->id }}">{{ $q->amount }}</option>
                @endforeach
            </select>
        </label>
        
        <label for="ingredients" class="form-group__label hover">Measurement
            <select class="js-example-basic-multiple" name="measurements[]">
                <option value="" class="form-group__option">no measurement</option>
                @foreach ($measurements as $m)        
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            </select>
        </label>


        <label for="preparations" class="form-group__label hover">Preparation
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
