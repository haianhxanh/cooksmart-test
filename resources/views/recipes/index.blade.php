<h1>HELLO FROM RECIPE</h1>

    @foreach ($recipes as $r)
    <h1>{{ $r->name }}</h1>

    <h2>{{ $r->total_time_id }}</h2>

    <p>{{ $r->description }}</p>

    <div>{{ $r->video_url }}</div>

    <img src="{{ $r->image_url }}" alt="">
    @endforeach
