<?php

namespace Database\Seeders;
use App\Models\RecipeUser;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;



class RecipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new RecipeUser;
        $r->user_id = 1;
        $r->recipe_id = 2;
        $r->save();
        
        $r = new RecipeUser;
        $r->user_id = 1;
        $r->recipe_id = 8;
        $r->save();
     
    }
}
