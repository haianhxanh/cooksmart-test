<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CuisineSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(TotalTimeSeeder::class);
        $this->call(StepSeeder::class);
        $this->call(DietSeeder::class);
        // $this->call(IngredientMeasurementPreparationQuantityRecipe::class);
    }
}
