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
        $r->name = 'Pad Thai with Tofu';
        $r->description = 'This amazing Pad Thai recipe is easy and approachable and can be made in under 30 minutes. It starts with fresh ingredients including rice noodles, chicken, shrimp, tofu, cilantro, bean sprouts, peanuts and scrambled eggs tossed in a delicious homemade pad thai sauce that is so good it tastes like it came from your favorite Thai restaurant.';
        $r->cuisine_id = 2;
        $r->diet_id = 1;
        $r->image_url = 'https://cdn.pixabay.com/photo/2019/08/16/09/31/pad-thai-4409871_1280.jpg';
        $r->video_url ='https://www.youtube.com/embed/gVXDvCI32N8';
        $r->total_time_id = 2;
        $r->source_url = 'https://tasty.co/recipe/vegan-pad-thai';
        $r->save();

        $r = new Recipe;
        $r->name = 'Pan-fried Duck Breast with Spring Veg';
        $r->description = 'Juicy pan-fried duck breast pairs an absolute treat with spring’s bounty of asparagus, new potatoes and peas. With best flavour friends chilli, mint and lemon in the mix, you just know this is going to be delicious.';
        $r->cuisine_id = 1;
        $r->image_url = 'https://img.jamieoliver.com/jamieoliver/recipe-database/106303004.jpg?tr=w-800,h-1066';
        $r->video_url ='https://www.youtube.com/embed/FQH0G12Z1VM';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.jamieoliver.com/recipes/duck-recipes/pan-fried-duck-breast-with-spring-veg/';
        $r->save();

        $r = new Recipe;
        $r->name = 'Shakshuka';
        $r->description = 'Harissa adds warmth and a ray of much-needed sunshine to my twist on a Middle-Eastern classic. Plus it’s a one-pan wonder, which always makes me happy.';
        $r->cuisine_id = 4;
        $r->diet_id = 1;
        $r->image_url = 'https://www.homecookingadventure.com/images/recipes/shakshuka_mainimage.jpg';
        $r->video_url ='https://www.youtube.com/embed/618QsMaVXp8';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.homecookingadventure.com/recipes/shakshuka-eggs-in-tomato-sauce';
        $r->save();

        $r = new Recipe;
        $r->name = 'Colombian Chicken Stew';
        $r->description = 'People who live or who have lived in Colombia know very well that any type of stew is welcome at any time of day and place. Stews are the type of food that we eat the most in Colombia, especially at lunch time and we always serve them with a side of white rice and avocado. Every now and then we also serve it with a side salad but that’s only to not feel bad for the amount of potatoes and cassava that it has.';
        $r->cuisine_id = 6;
        $r->image_url = 'https://3.bp.blogspot.com/-_05ayhZHwvA/UXR-L4wUmHI/AAAAAAAAAtc/PG8o-sWZq10/s1600/SudadoDePolloSyS4.jpg';
        $r->video_url ='https://www.youtube.com/embed/FtSgLr9kXiA&list=PL7tJ8ouvevOFsq2AtU-x_sTBg3TUAuoJ9&index=23';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.sweetysalado.com/en/2013/05/colombian-chicken-stew.html';
        $r->save();

        $r = new Recipe;
        $r->name = 'Beef and Bean Chili';
        $r->description = 'The best beef chili recipe ready in under 30 minutes! full of ground beef, beans and seasonings, this chili gets its flavour and spice from jalapeños!';
        $r->cuisine_id = 1;
        $r->image_url = 'https://healthyfitnessmeals.com/wp-content/uploads/2020/01/Homemade-beef-chili-3.jpg';
        $r->video_url ='https://youtube.com/embed/Eo1Mevvq8qU';
        $r->total_time_id = 1;
        $r->save();

        $r = new Recipe;
        $r->name = 'Veggie Carbonara';
        $r->description = 'Enjoy this healthier veggie carbonara with mushrooms and courgettes for an easy family meal. It takes just 30 minutes, so is ideal on busy weeknights';
        $r->cuisine_id = 1;
        $r->diet_id = 1;
        $r->image_url = 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/healthier-veggie-carbonara-117f40a.jpg?quality=90&webp=true&resize=440,400';
        $r->video_url = 'https://www.youtube.com/embed/H2LJuSG2K3Y';
        $r->total_time_id = 1;
        $r->save();

        $r = new Recipe;
        $r->name = 'Easy Egg Fried Rice';
        $r->description = 'A quick 20 minute meal when you do not have a lot of time to cook';
        $r->cuisine_id = 2;
        $r->diet_id = 3;
        $r->image_url = 'https://i1.wp.com/photos.smugmug.com/EGG-FRIED-RICE/i-L2Q49xf/0/f0d68d4d/X2/Egg%20Fried%20Rice%205%20copy-X2.jpg?w=1170&ssl=1';
        $r->video_url ='https://www.youtube.com/embed/qH__o17xHls';
        $r->total_time_id = 1;
        $r->save();

        $r = new Recipe;
        $r->name = 'Ham Cheese and Onion Empanadas';
        $r->description = 'Made with a flaky, buttery crust and filled with a delicious cheesy filling, these homemade empanadas are incredibly good! Plus, they’re portable and freezer-friendly!';
        $r->cuisine_id = 6;
        $r->image_url = 'https://assets.bonappetit.com/photos/5d923d42c5d4ea0008b45ea5/16:9/w_2560%2Cc_limit/1019-Ham-Empenadas-2.jpg';
        $r->video_url ='https://www.youtube.com/embed/fv-mwCCBqAs';
        $r->total_time_id = 2;
        $r->source_url = 'https://www.bonappetit.com/recipe/ham-cheese-and-onion-empanadas';
        $r->save();

        $r = new Recipe;
        $r->name = 'Sesame Chicken';
        $r->description = 'Sesame chicken is one of the most popular Americanized Chinese dishes in the US. It is crispy and crunchy. And it has a super delicious sweet sesame glaze. Hmm… Who doesn’t like these heavenly goodies? After watching this video, you will never go to any Chinese take-outs anymore. Because this recipe is so much better!';
        $r->cuisine_id = 2;
        $r->image_url = 'https://www.crunchycreamysweet.com/wp-content/uploads/2018/07/sesame-chicken-5-Copy.jpg';
        $r->video_url ='https://www.youtube.com/embed/XPaeFKvqnf8';
        $r->total_time_id = 2;
        $r->source_url = 'https://cicili.tv/sesame-chicken-recipe/';
        $r->save();

        $r = new Recipe;
        $r->name = 'Portabello Fajita Bowl';
        $r->description = 'A comforting dish inspired by Latin American flavors. Portobello mushrooms, green bell pepper, and red onion are seasoned with a Cuban spice blend, then sautéed. They’re topped with fresh tomato and served over a bed of lime-zested rice and refried pinto beans. A creamy chimichurri sauce, drizzled over top, gives the dish an herbaceous finish.';
        $r->cuisine_id = 6;
        $r->diet_id = 1;
        $r->image_url = 'https://img.buzzfeed.com/video-api-prod/assets/2c8b88181bcb4ba3a7d5933b313fbe8d/beauty.jpg';
        $r->video_url ='https://www.youtube.com/embed/kFcQJkSHeLg';
        $r->total_time_id = 1;
        $r->source_url = 'https://tasty.co/recipe/portobello-fajita-bowl-meal-prep';
        $r->save();

        $r = new Recipe;
        $r->name = 'Gluten Free Chinese Chicken with Honey';
        $r->description = 'This Chinese Honey Chicken Recipe is healthier and better than takeout. It’s easy to make at home in only 29 minutes, and it’s one of the best gluten free recipes ever!';
        $r->cuisine_id = 2;
        $r->diet_id = 3;
        $r->image_url = 'https://whitneybond.com/wp-content/uploads/2015/01/Chinese-Honey-Chicken-2.jpg';
        $r->video_url ='https://www.youtube.com/embed/FQH0G12Z1VM';
        $r->total_time_id = 1;
        $r->source_url = 'https://whitneybond.com/gluten-free-chinese-honey-chicken/';
        $r->save();
    }
}