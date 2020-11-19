<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<form method="post" class="form-group" action="{{action('RecipeController@store')}}">
    @csrf

    <label for="name">Recipe name
        <input type="text" name="name">
    </label>


    <label for="cuisine_id">Cuisine
        <select name="cuisine_id" id="">
            @foreach ($cuisines as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select>   
    </label>


    <label for="total_time_id">Total time
        <select name="total_time_id" id="">
            @foreach ($times as $t)
                <option value="{{ $t->id }}">{{ $t->time }}</option>
            @endforeach
        </select>
    </label>

    
    <label for="description">Description
        <textarea name="description"></textarea>
    </label>


    <label for="image">Photo:
        <input id="image" type="text" name="image" value="Insert link to image"/>
    </label>


    <label for="video">Video:
        <input id="video" type="text" name="video" value=""/>
    </label>

    <label for="source_url">Source URL
        <input type="text" id="source_url" name="source_url" />
    </label>


    <label for="ingredients">Ingredients
        <select class="js-example-basic-multiple" name="ingredients[]" multiple="multiple">
            @foreach ($ingredients as $i)        
                <option value="{{ $i->id }}">{{ $i->name }}</option>
            @endforeach
         </select>
    </label>


    <label for="step">Steps
        <div class="steps">
            <textarea name="step[]" id="" cols="30" rows="5"></textarea>
        </div>
        <button type="button" id="step-btn">+</button>
    </label>



    <button type="submit">Add your recipe!!</button>
</form>

{{-- <script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
</script> --}}

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
</script>


