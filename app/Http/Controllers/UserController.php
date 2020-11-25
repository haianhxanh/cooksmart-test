<?php

namespace App\Http\Controllers;
use App\Models\RecipeUser;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function favourite() {
        $recipes = Recipe::orderBy('id', 'desc')->get();
        // dd($recipes);
        return view('profile/show', compact('recipes'));
    }
}
