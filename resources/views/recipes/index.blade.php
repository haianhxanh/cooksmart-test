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
            <th>Edit Recipe</th>
        </tr>
        </thead>
        <tbody>
    @foreach ($recipes as $r)
        <tr class="recipe-table-row">
            <td class="recipe-table-name">{{ $r->name }}</td>
            <td class="recipe-table-img"><img src="{{ $r->image_url }}" alt="{{$r->name}}"></td>
            <td><button class="edit-btn">Edit Recipe</button></td>
        </tr>
    </tbody>

    @endforeach
    </table>
</div>
@endsection
</div>