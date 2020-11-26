<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;
use App\Models\Cuisine;
use App\Models\Diet;
use App\Models\TotalTime;
use App\Models\Step;
use App\Models\Ingredient;
use App\Models\Group;
use App\Models\Quantity;
use App\Models\Measurement;
use App\Models\Preparation;
use App\Models\User;
use App\Models\IngredientMeasurementPreparationQuantityRecipe;


class AdminController extends Controller
{
    public function info() {
        $recipes = Recipe::get();
        $recipes_latest = Recipe::orderBy('id', 'desc')->limit('4')->get();
        // dd($recipes_latest);
        $users = User::get();
        return view('layouts/admin', compact('recipes', 'users', 'recipes_latest'));
    }
}
