<h1>HELLO FROM RECIPE</h1>

    @foreach ($recipes as $r)
    <h1>{{ $r->name }}</h1>
    @endforeach
