<?php

namespace Database\Seeders;
use App\Models\Recipe;

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Recipe;
        $r->name = 'Pad Thai with tofu';
        $r->image_url = 'https://cdn.pixabay.com/photo/2019/08/16/09/31/pad-thai-4409871_1280.jpg';
        $r->video_url ='https://www.youtube.com/watch?v=gVXDvCI32N8';
        $r->save();
    }
}
