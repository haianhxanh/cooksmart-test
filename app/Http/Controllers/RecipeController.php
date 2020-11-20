<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
use App\Models\IngredientPreparationQuantityRecipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::get();
        $cuisine_id = Recipe::where('cuisine_id')->get();

        dd($cuisine_id);
        $cuisine_name = Cuisine::where($cuisine_id, 'id');
        
        return view('recipes/index', compact('recipes'));
    }

    public function create()
    {
        $cuisines = Cuisine::get();
        $diets = Diet::get();
        $times = TotalTime::get();
        $ingredients = Ingredient::get();
        $groups = Group::get();
        $quantities = Quantity::get();
        $measurements = Measurement::get();
        $preparations = Preparation::get();
        return view('recipes/create', compact('cuisines', 'diets', 'times', 'ingredients', 'groups', 'quantities', 'measurements', 'preparations'));
    }
    public function store(Request $request)
    {
        $cuisines = Cuisine::get();
        $diets = Diet::get();
        $times = TotalTime::get();
        $ingredients = Ingredient::get();
        $groups = Group::get();
        $quantities = Quantity::get();
        $measurements = Measurement::get();
        $preparations = Preparation::get();

        // inserting into Recipes table
        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->input('image');
        $video = $request->input('video');
        $source_url = $request->input('source_url');

        $input_cuisine_id = $request->input('cuisine_id');
        $cuisine_id = Cuisine::where('id',[$input_cuisine_id])->value('id');

        $input_time_id = $request->input('total_time_id');
        $time_id = TotalTime::where('id', [$input_time_id])->value('id');

        $input_diet_id = $request->input('diet_id');
        $diet_id = Diet::where('id', [$input_diet_id])->value('id');

        $input_group_id = $request->input('group_id');
        $group_id = Group::where('id', [$input_group_id])->value('id');

        // save a new Recipe
        $recipe = new Recipe;
        $recipe->name = $name;
        $recipe->cuisine_id = $cuisine_id;
        $recipe->diet_id = $diet_id;
        $recipe->description = $description;
        $recipe->total_time_id = $time_id;
        $recipe->image_url = $image;
        $recipe->video_url = $video;
        $recipe->source_url = $source_url;
        $recipe->save();

        // save steps 
        foreach($request->input('step') as $i => $step){
            $s = new Step;
            $s->recipe_id = $recipe->id;
            $s->step = $step;
            $s->number = $i + 1;
            $s->save();
        }

        $ingredient_input = $request->input('ingredients'); 
        for ($a = 0; $a < count($ingredient_input); $a++) {
            if( is_numeric($ingredient_input) == false ) {
                $new_ingredient = new Ingredient;
                $new_ingredient->name = $ingredient_input[$a];
                $new_ingredient->save();
            }
        }

        $quantity_input = $request->input('quantities'); 
        for ($b = 0; $b < count($quantity_input); $b++) {
            if( is_numeric($quantity_input) == false ) {
                $new_quantity = new Quantity;
                $new_quantity->amount = $quantity_input[$b];
                $new_quantity->save();
            }
        }

        $measurement_input = $request->input('measurements'); 
        for ($c = 0; $c < count($measurement_input); $c++) {
            if( is_numeric($measurement_input) == false ) {
                $new_measurement = new Measurement;
                $new_measurement->name = $measurement_input[$c];
                $new_measurement->save();
            }
        }
  
        $preparation_input = $request->input('preparations');
        for ($d = 0; $d < count($preparation_input); $d++) {
            if( is_numeric($preparation_input) == false ) {
                $new_preparation = new Preparation;
                $new_preparation->name = $preparation_input[$d];
                $new_preparation->save();
            }
        }

        // save ingredients-quantities-measurements into intermediate table
        for ($i = 0; $i < count($ingredient_input); $i++) {
            $combo = new IngredientPreparationQuantityRecipe;
            $combo->recipe_id = $recipe->id;
            $combo->ingredient_id = $ingredient_input[$i];
            $combo->quantity_id = $quantity_input[$i];
            $combo->preparation_id = $preparation_input[$i];
            $combo->save();
        }

        return view('recipes/create', compact('recipe','cuisines', 'diets', 'times', 'ingredients', 'quantities', 'measurements', 'preparations'));
    }

}
