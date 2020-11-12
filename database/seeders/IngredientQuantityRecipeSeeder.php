<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientQuantityRecipe;

class IngredientQuantityRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n = new IngredientQuantityRecipe;
        $n->group_id = 2;
        $n->recipe_id = 2;
        $n->quantity_id = 2;
        $n->save();    
    }
}
