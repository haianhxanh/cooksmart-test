<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('banner/banner');
});

Route::get('/about', function () {
    return view('about/about');
});
Route::get('/test', 'TestController@test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// User
Route::get('/user/profile', 'UserController@favourite')->middleware('auth');
Route::get('/user/profile/recipes/{id}/delete', 'UserController@deleteFavorite')->middleware('auth');


Route::get('/recipes/create', 'RecipeController@create')->middleware('auth','can:admin');
Route::post('/recipes', 'RecipeController@store');
Route::get('/recipes', 'RecipeController@index');

// json
Route::get('api/recipes', 'ApiController@recipes');

Route::view('/search', 'recipes/search');


// recipe details
Route::get('/recipes/{id}', 'RecipeController@show');

// Edit
Route::get('/recipes/{id}/edit', 'RecipeController@edit');

Route::put('/recipes/add/{id}', 'UserController@addToFavorite')->middleware('auth');

Route::put('/recipes/{id}', 'RecipeController@update');

Route::delete('/recipes/{id}', 'RecipeController@destroy');