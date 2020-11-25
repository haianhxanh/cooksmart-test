<?php

namespace App\Http\Controllers;
use App\Models\RecipeUser;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function addToFavorite($id) {
        $recipe = Recipe::get();
        $recipe_id = Recipe::where('id', $id)->get();
        $user_id = \Auth::user()->id;
 
        $addToFavourite = new RecipeUser;
        $addToFavourite->user_id = $user_id;
        $addToFavourite->recipe_id = $id;
        $addToFavourite->save();

        return view('recipes/search', compact('recipe'));
    }

    public function favourite() {
        $recipes = Recipe::orderBy('id', 'desc')->get();
        // dd($recipes);
        return view('profile/show', compact('recipes'));
    }

    public function user() {
        $user = \Auth::user();
        return view('recipes/search', compact('user'));
    }
}
