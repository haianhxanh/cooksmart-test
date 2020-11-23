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
use App\Models\IngredientMeasurementPreparationQuantityRecipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::orderBy('id', 'desc')->get();
        $cuisine_id = Recipe::where('cuisine_id')->get();
        $cuisine_name = Cuisine::where($cuisine_id, 'id');
        
        return view('recipes/index', compact('recipes'));
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe_id = Recipe::where('id', $id)->value('id');
        $combo = IngredientMeasurementPreparationQuantityRecipe::where('recipe_id', $id)->get();
        // dd($combo);
        $steps = Step::where('recipe_id', $recipe_id)->get('step');

        $time_id = Recipe::where('id', $id)->value('total_time_id');
        $time = TotalTime::where('id', $time_id)->value('time');
        $cuisine_id = Recipe::where('id', $id)->value('cuisine_id');
        $cuisine = Cuisine::where('id', $cuisine_id)->value('name');
        $diet_id = Recipe::where('id', $id)->value('diet_id');
        $diet = Diet::where('id', $diet_id)->value('name');
        

        $ingredient_id = IngredientMeasurementPreparationQuantityRecipe::where('recipe_id', $recipe_id)->pluck('ingredient_id');
        $quantity_id = IngredientMeasurementPreparationQuantityRecipe::where('recipe_id', $recipe_id)->pluck('quantity_id');
        $measurement_id = IngredientMeasurementPreparationQuantityRecipe::where('recipe_id', $recipe_id)->pluck('measurement_id');
        $preparation_id = IngredientMeasurementPreparationQuantityRecipe::where('recipe_id', $recipe_id)->pluck('preparation_id');


        for ($i = 0; $i < count($combo); $i++) {
            $ingredient[$i] = Ingredient::where('id', $ingredient_id[$i])->value('name');
            $quantity[$i] = Quantity::where('id', $quantity_id[$i])->value('amount');
            $measurement[$i] = Measurement::where('id', $measurement_id[$i])->value('name');
            $preparation[$i] = Preparation::where('id', $preparation_id[$i])->value('name');
        }

        // $ingredients = $ingredient;
        // $quantities = $quantity;
        // $measurements = $measurement;
        // $preparations = $preparation;
        // dd($ingredients);
        
        return view('recipes/details', compact('recipe', 'steps', 'ingredient', 'quantity', 'measurement', 'preparation', 'combo', 'time', 'cuisine', 'diet'));
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
        $quantity_input = $request->input('quantities'); 
        $measurement_input = $request->input('measurements'); 
        $preparation_input = $request->input('preparations');
 

        if(count($ingredient_input) !== count($quantity_input)
        || count($ingredient_input) !== count($measurement_input) 
        || count($ingredient_input) !== count($preparation_input)
        ){
            return 'ooops we have a problem - we have `not matching` count of inputs!';
        }

        // save ingredients-quantities-measurements into intermediate table
        for ($i = 0; $i < count($ingredient_input); $i++) {
            if(is_numeric($preparation_input[$i])) {
                $preparation = $preparation_input[$i];
            } else {
                $new_preparation = new Preparation;
                $new_preparation->name = $preparation_input[$i];
                $new_preparation->save();
                $preparation = $new_preparation->id;
            }

            if(is_numeric($ingredient_input[$i])) {
                $ingredient = $ingredient_input[$i];
            } else {
                $new_ingredient = new Ingredient;
                $new_ingredient->name = $ingredient_input[$i];
                $new_ingredient->save();
                $ingredient = $new_ingredient->id;
            }

            if(Quantity::where('amount', $quantity_input[$i])->count()) {
                $quantity = $quantity_input[$i];
            } else {
                $new_quantity = new Quantity;
                $new_quantity->amount = $quantity_input[$i];
                $new_quantity->save();
                $quantity = $new_quantity->id;
            }

            if(is_numeric($measurement_input[$i])) {
                $measurement = $measurement_input[$i];
            } else {
                $new_measurement = new Measurement;
                $new_measurement->name = $measurement_input[$i];
                $new_measurement->save();
                $measurement = $new_measurement->id;
            }

        
            // same thing as with preparation needs to be done with ingredient, quantity and measurement
            $combo = new IngredientMeasurementPreparationQuantityRecipe;
            $combo->recipe_id = $recipe->id;
            $combo->ingredient_id = $ingredient;
            $combo->quantity_id = $quantity;
            $combo->measurement_id = $measurement;
            $combo->preparation_id = $preparation;
            $combo->save();
        }
        // flash the success message
        session()->flash('recipe_success_message', 'Your recipe has been successfully added');
        return redirect(action('RecipeController@index'));
    }

    // public function edit($id)
    // {
    //     $recipe = Recipe::findOrFail($id);
    //     return view('recipes/edit', compact('recipe'));
    // }

    // public function update(Request $request, $id) 
    // {   
    //     $cuisines = Cuisine::get();
    //     $diets = Diet::get();
    //     $times = TotalTime::get();
    //     $ingredients = Ingredient::get();
    //     $groups = Group::get();
    //     $quantities = Quantity::get();
    //     $measurements = Measurement::get();
    //     $preparations = Preparation::get();

    //     // inserting into Recipes table
    //     $name = $request->input('name');
    //     $description = $request->input('description');
    //     $image = $request->input('image');
    //     $video = $request->input('video');
    //     $source_url = $request->input('source_url');

    //     $input_cuisine_id = $request->input('cuisine_id');
    //     $cuisine_id = Cuisine::where('id',[$input_cuisine_id])->value('id');

    //     $input_time_id = $request->input('total_time_id');
    //     $time_id = TotalTime::where('id', [$input_time_id])->value('id');

    //     $input_diet_id = $request->input('diet_id');
    //     $diet_id = Diet::where('id', [$input_diet_id])->value('id');

    //     $input_group_id = $request->input('group_id');
    //     $group_id = Group::where('id', [$input_group_id])->value('id');

    //     // save a new Recipe
    //     $recipe = new Recipe;
    //     $recipe->name = $name;
    //     $recipe->cuisine_id = $cuisine_id;
    //     $recipe->diet_id = $diet_id;
    //     $recipe->description = $description;
    //     $recipe->total_time_id = $time_id;
    //     $recipe->image_url = $image;
    //     $recipe->video_url = $video;
    //     $recipe->source_url = $source_url;
    //     $recipe->save();

    //     // save steps 
    //     foreach($request->input('step') as $i => $step){
    //         $s = new Step;
    //         $s->recipe_id = $recipe->id;
    //         $s->step = $step;
    //         $s->number = $i + 1;
    //         $s->save();
    //     }

    //     $ingredient_input = $request->input('ingredients'); 
    //     $quantity_input = $request->input('quantities'); 
    //     $measurement_input = $request->input('measurements'); 
    //     $preparation_input = $request->input('preparations');
 

    //     if(count($ingredient_input) !== count($quantity_input)
    //     || count($ingredient_input) !== count($measurement_input) 
    //     || count($ingredient_input) !== count($preparation_input)
    //     ){
    //         return 'ooops we have a problem - we have `not matching` count of inputs!';
    //     }

    //     // save ingredients-quantities-measurements into intermediate table
    //     for ($i = 0; $i < count($ingredient_input); $i++) {
    //         if(is_numeric($preparation_input[$i])) {
    //             $preparation = $preparation_input[$i];
    //         } else {
    //             $new_preparation = new Preparation;
    //             $new_preparation->name = $preparation_input[$i];
    //             $new_preparation->save();
    //             $preparation = $new_preparation->id;
    //         }

    //         if(is_numeric($ingredient_input[$i])) {
    //             $ingredient = $ingredient_input[$i];
    //         } else {
    //             $new_ingredient = new Ingredient;
    //             $new_ingredient->name = $ingredient_input[$i];
    //             $new_ingredient->save();
    //             $ingredient = $new_ingredient->id;
    //         }

    //         if(Quantity::where('amount', $quantity_input[$i])->count()) {
    //             $quantity = $quantity_input[$i];
    //         } else {
    //             $new_quantity = new Quantity;
    //             $new_quantity->amount = $quantity_input[$i];
    //             $new_quantity->save();
    //             $quantity = $new_quantity->id;
    //         }

    //         if(is_numeric($measurement_input[$i])) {
    //             $measurement = $measurement_input[$i];
    //         } else {
    //             $new_measurement = new Measurement;
    //             $new_measurement->name = $measurement_input[$i];
    //             $new_measurement->save();
    //             $measurement = $new_measurement->id;
    //         }

        
    //         // same thing as with preparation needs to be done with ingredient, quantity and measurement
    //         $combo = new IngredientMeasurementPreparationQuantityRecipe;
    //         $combo->recipe_id = $recipe->id;
    //         $combo->ingredient_id = $ingredient;
    //         $combo->quantity_id = $quantity;
    //         $combo->measurement_id = $measurement;
    //         $combo->preparation_id = $preparation;
    //         $combo->save();
    //     }
    //     // flash the success message
    //     session()->flash('update_success_message', 'Your recipe has been successfully updated');
    //     return redirect(action('RecipeController@index'));
    // }

}
