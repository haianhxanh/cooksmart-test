<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Recipe;
use App\Models\Cuisine;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::get();
        
        return view('recipes/index', compact('recipes'));
    }

    public function create()
    {
        $cuisines = Cuisine::get();

        return view('recipes/create', compact('cuisines'));
    }
    public function store(Request $request)
    {
        $cuisines = Cuisine::get();
        $name = $request->input('name');
        $description = $request->input('description');
        $input_cuisine_id = $request->input('cuisine_id');
        $cuisine_id = Cuisine::where('id',[$input_cuisine_id])->value('id');

        $recipe = new Recipe;
        $recipe->name = $name;
        $recipe->description = $description;
        $recipe->cuisine_id = $cuisine_id;
        $recipe->save();
        return view('recipes/create', compact('recipe','cuisines'));
    }


}
