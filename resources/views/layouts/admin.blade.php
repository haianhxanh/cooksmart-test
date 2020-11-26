@extends('layouts.main')

@include('layouts.navigation')

@section('content')

<div class="admin-page">

  <h2>Admin Board</h2>

  <div class="admin-body">

    <div class="admin-actions">
      <div class="admin-actions__item">
        <a href="/recipes/create"><div class="item-img"><img src="{{ asset('img/add.png') }}" alt="Create new recipes"></div></a>
      </div>
    
      <div class="admin-actions__item">
        <a href="/recipes"><div  class="item-img"><img src="{{ asset('img/edit.png') }}" alt="Edit recipes"></div></a>
      </div>

      <div class="admin-actions__item">
        <a href="https://codeboot.cz:8080/phpmyadmin"><div  class="item-img"><img src="{{ asset('img/database.png') }}" alt="Access Database"></div></a>
      </div>
    </div>

    <div class="admin-info">
      <div class="admin-info__data__facts">
        <table>
          <tr>
            <th>
              Recipes
            </th>
            <td>
              {{ $recipes->count() }}
            </td>
          </tr>

          <tr>
            <th>
              Users
            </th>
            <td>
              {{ $users->count() }}
            </td>
          </tr>

        </table>
      </div>

      <div class="admin-info__data__recipes">
          <h3>Latest recipes</h3>
         <div class="results-card-container">
            @foreach ($recipes_latest as $r)
            <div class="results-card">
              <h4 class="results-name">{{ $r->name }}</h4>
              <div class="results-img"><img src="{{ $r->image_url }}" alt="{{ $r->name }}"/></div>
              <button class="results-btn"><a href="{{ action('RecipeController@show', $r->id) }}"">View details</a></button>
           </div>
            @endforeach
         </div>
      </div>
    </div>


  </div>
</div>
@endsection