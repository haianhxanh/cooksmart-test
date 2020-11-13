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

<label for="description">Description</label>
<textarea name="description">Text area</textarea>

<button type="submit">Add your recipe!!</button>

<p>
        <label for="photo">Photo:</label>
        <input id="photo" type="text" name="photo" value="https://www.codingbootcamp.cz/img/cbp_logo-dark.png"/>
    </p>

</form>
