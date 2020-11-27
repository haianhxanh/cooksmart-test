
@extends('layouts.main')
@include('layouts.navigation')
@section('content')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

</head>

<div class="page-index">
    <div class="recipe-container">
        <div class="index-header">
            <h1>List of Recipes</h1>
        </div>
    
         @if (Session::has('recipe_success_message'))
            <div id="success-message" class=“alert alert--success”>{{ Session::get('recipe_success_message') }}</div>
        @elseif(Session::has('delete_message'))
            <div id="delete-message" class=“alert”>{{ Session::get('delete_message') }}</div>
        @endif

        <input type="text" placeholder="Search" id="myInput" style="width: 90%; font-weight: bold; font-size: 1.5rem; margin: 1rem 5%; height: 3rem; border: 4px solid #c9e265">
    
        <div class="recipe-table">
    
            <table>
                <thead>
                <tr>
                    <th>Recipe Name</th>
                    <th>Image</th>
                    <th>Recipe Details</th>
                    @can('admin')
                    <th>Edit Recipe</th>
                    @endcan
                </tr>
                </thead>
    
                <tbody id="myTable">
            @foreach ($recipes as $r)
                <tr class="recipe-table-row">
    
                    <td class="recipe-table-name">{{ $r->name }}</td>
    
                    <td class="recipe-table-img"><img src="{{ $r->image_url }}" alt="{{$r->name}}"></td>
    
                    <td><button class="edit-btn"><a href="{{action('RecipeController@show', $r->id)}}">Details</a></button></td>
    
                    @can('admin')
                    <td><button class="edit-btn"><a href="{{action('RecipeController@edit', $r->id)}}">Edit Recipe</a></button></td>
                    @endcan
    
                </tr>
                @endforeach
            </tbody>
    
        
            </table>
        </div>
    </div>

</div> 
@endsection