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

Route::get('/recipes/create', 'RecipeController@create')->middleware('auth');
Route::post('/recipes', 'RecipeController@store');
Route::get('/recipes', 'RecipeController@index');

// json
Route::get('api/recipes', 'ApiController@recipes');

Route::view('/search', 'recipes/search');
// Route::view('/about', 'about/about');


// recipe details
Route::get('/recipes/{id}', 'RecipeController@show');

// Edit
Route::get('/recipes/{id}/edit', 'RecipeController@edit');
Route::put('/recipes/{id}', 'RecipeController@update');

// Route::view('/{path?}', 'app/App')->where('path', '.*');

