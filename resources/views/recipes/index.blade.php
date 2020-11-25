@extends('layouts.main')
@include('layouts.navigation')
@section('content')
<div class="recipe-container">
    <div class="index-header">
        <h1>List of Recipes</h1>
    </div>

     @if (Session::has('recipe_success_message'))
        <div id="success-message" class=“alert alert--success”>{{ Session::get('recipe_success_message') }}</div>
    @endif

    <div class="recipe-table">
       
    <table>
        <thead>
        <tr>
            <th>Recipe Name</th>
            <th>Image</th>
            <th>Recipe Details</th>
            @if(Auth::check())
            <th>Edit Recipe</th>
            @endif
        </tr>
        </thead>
        <tbody>
    @foreach ($recipes as $r)
        <tr class="recipe-table-row">
            <td class="recipe-table-name">{{ $r->name }}</td>
            <td class="recipe-table-img"><img src="{{ $r->image_url }}" alt="{{$r->name}}"></td>
            <td><button class="edit-btn"><a href="{{action('RecipeController@show', $r->id)}}">Details</a></button></td>
            @if(Auth::check())
            <td><button class="edit-btn"><a href="{{action('RecipeController@edit', $r->id)}}">Edit Recipe</a></button></td>
            @endif
        </tr>
        @endforeach
    </tbody>

   
    </table>
</div>
@endsection
</div>