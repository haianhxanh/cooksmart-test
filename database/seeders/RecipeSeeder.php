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
        $r->description = '';
        $r->cuisine_id = 2;
        $r->diet_id = 1;
        $r->image_url = 'https://cdn.pixabay.com/photo/2019/08/16/09/31/pad-thai-4409871_1280.jpg';
        $r->video_url ='https://www.youtube.com/watch?v=gVXDvCI32N8';
        $r->total_time_id = 2;
        $r->source_url = 'https://tasty.co/recipe/vegan-pad-thai';
        $r->save();

        $r = new Recipe;
        $r->name = 'Pan-fried duck breast with spring veg';
        $r->description = '';
        $r->cuisine_id = 1;
        $r->image_url = 'https://img.jamieoliver.com/jamieoliver/recipe-database/106303004.jpg?tr=w-800,h-1066';
        $r->video_url ='https://www.youtube.com/watch?v=FQH0G12Z1VM';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.jamieoliver.com/recipes/duck-recipes/pan-fried-duck-breast-with-spring-veg/';
        $r->save();

        $r = new Recipe;
        $r->name = 'Shakshuka';
        $r->description = '';
        $r->cuisine_id = 4;
        $r->diet_id = 1;
        $r->image_url = 'https://www.homecookingadventure.com/images/recipes/shakshuka_mainimage.jpg';
        $r->video_url ='https://www.youtube.com/watch?v=618QsMaVXp8';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.homecookingadventure.com/recipes/shakshuka-eggs-in-tomato-sauce';
        $r->save();
    }
}
