<?php

namespace Database\Seeders;
use App\Models\Book;

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
        $this->call(GroupSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(MeasurementSeeder::class);
        $this->call(QuantitySeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(TotalTimeSeeder::class);
        $this->call(StepSeeder::class);
    }
}
