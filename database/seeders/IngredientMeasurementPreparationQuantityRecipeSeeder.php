<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientMeasurementPreparationQuantityRecipe;

class IngredientMeasurementPreparationQuantityRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = new IngredientMeasurementPreparationQuantityRecipe;
        $n->recipe_id = 1;
        $n->ingredient_id = 15;
        $n->quantity_id = 27;
        $n->measurement_id = 10;
        $n->save();    

        $n = new IngredientMeasurementPreparationQuantityRecipe;
        $n->recipe_id = 1;
        $n->ingredient_id = 24;
        $n->quantity_id = 27;
        $n->measurement_id = 10;
        $n->save();    

        $n = new IngredientMeasurementPreparationQuantityRecipe;
        $n->recipe_id = 1;
        $n->ingredient_id = 26;
        $n->quantity_id = 13;
        $n->save();  

    }
}
