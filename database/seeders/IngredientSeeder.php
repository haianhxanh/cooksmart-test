<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = new Ingredient;
        $i->name = 'onion';
        $i->group_id = 2;
        $i->save();

        $i = new Ingredient;
        $i->name = 'paprika';
        $i->group_id = 2;
        $i->save();

        $i = new Ingredient;
        $i->name = 'allspice';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'basil';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'chilli powder';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'curry powder';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'ginger';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'garlic';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'oregano';
        $i->group_id = 4;
        $i->save();

        $i = new Ingredient;
        $i->name = 'beef';
        $i->group_id = 1 ;
        $i->save();

        $i = new Ingredient;
        $i->name = 'chicken';
        $i->group_id = 1;
        $i->save();

        $i = new Ingredient;
        $i->name = 'milk';
        $i->group_id = 5;
        $i->save();

        $i = new Ingredient;
        $i->name = 'butter';
        $i->group_id = 5;
        $i->save();
    }
}
