<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new Group;
        $g->name = 'meat';
        $g->save();

        $g = new Group;
        $g->name = 'vegetables';
        $g->save();

        $g = new Group;
        $g->name = 'fish';
        $g->save();

        $g = new Group;
        $g->name = 'spices';
        $g->save();

        $g = new Group;
        $g->name = 'dairy';
        $g->save();

        $g = new Group;
        $g->name = 'grains';
        $g->save();
    }
}
