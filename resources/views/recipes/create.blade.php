<form method="post" action="{{action('RecipeController@store')}}">
@csrf

<label for="name">Recipe name</label>
<input type="text" name="name">

<label for="cuisine_id">Cuisine</label>

<select name="cuisine_id" id="">

    @foreach ($cuisines as $c)
        <option value="{{ $c->id }}">{{ $c->name }}</option>
    @endforeach

</select>

<label for="total_time_id">Total time</label>
<select name="total_time_id" id="">
    @foreach ($times as $t)
        <option value="{{ $t->id }}">{{ $t->time }}</option>
    @endforeach

</select>


<label for="description">Description</label>
<textarea name="description"></textarea>

<button type="submit">Add your recipe!!</button>

<p>
    <label for="image">Photo:</label>
    <input id="image" type="text" name="image" value="https://www.codingbootcamp.cz/img/cbp_logo-dark.png"/>
</p>


<p>
    <label for="video">Video:</label>
    <input id="video" type="text" name="video" value=""/>
</p>

<label for="step">Steps</label>
<div class="steps">
    <textarea name="step[]" id="" cols="30" rows="10"></textarea>
</div>

    <button type="button" id="step-btn">Add new step</button>
<script>
const stepBtn = document.getElementById('step-btn');
stepBtn.addEventListener('click', () => {
    const steps = document.querySelector('.steps');
    const input = document.createElement('textarea');
    input.name = 'step[]';
    input.rows = '10';
    input.cols = '30';
    steps.appendChild(input);
})



</script>
</form>
