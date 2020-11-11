<?php

namespace Database\Seeders;
use App\Models\Cuisine;

use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Cuisine;
        $c->name = 'Western';
        $c->save();

        $c = new Cuisine;
        $c->name = 'Asian';
        $c->save();

        $c = new Cuisine;
        $c->name = 'Fusion';
        $c->save();

        $c = new Cuisine;
        $c->name = 'Middle Eastern';
        $c->save();

        $c = new Cuisine;
        $c->name = 'African';
        $c->save();

        $c = new Cuisine;
        $c->name = 'Latin American';
        $c->save();
    }
}
