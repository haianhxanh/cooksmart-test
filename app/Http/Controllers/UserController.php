<?php

namespace App\Http\Controllers;
use App\Models\RecipeUser;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    public function addToFavorite(Request $request, $id) {

        $user = \Auth::user();
        $user_id = $user->id;
        $recipe = Recipe::findOrFail($id);

        $addToFavorite = new RecipeUser;
        $addToFavorite->user_id = $request->input('user_id');
        $addToFavorite->recipe_id = $request->input('recipe_id');

        $addToFavorite->save();

        session()->flash('added_success_message', 'Recipe has been saved to');
        return redirect(action('RecipeController@show', $recipe->id));
    }

    public function favourite() {
        $user = \Auth::user();
        $user_id = $user->id;
        $recipes_id = RecipeUser::where('user_id', $user_id)->pluck('recipe_id');

        $recipes = [];

        foreach($recipes_id as $i => $r) {
            $recipes[$i] = Recipe::where('id', $r)->first();
        }

        return view('profile/show', compact('user', 'recipes'));
    }

    public function deleteFavorite($id) {
  
        $recipe = RecipeUser::where('recipe_id', $id);
        $recipe->delete();

        return redirect(action('UserController@favourite'));
    }   
}
