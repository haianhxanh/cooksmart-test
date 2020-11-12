<?php

namespace Database\Seeders;
use App\Models\Step;

use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Step;
        $s->step = 'Soak the rice noodles in room-temperature water for 30 minutes prior to cooking.';
        $s->number = 1;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Make the sauce: in a small saucepan over medium-high heat, whisk together the rice vinegar, soy sauce, brown sugar, Worcestershire sauce, and tamarind paste.';
        $s->number = 2;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Bring to a boil, then reduce the heat to low. Simmer for 5 minutes, stirring constantly, until the sauce thickens and coats the back of a wooden spoon. Remove the sauce from the heat and set aside.';
        $s->number = 3;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a large cast-iron pan or wok over high heat. Add the peanut oil, scallions, chiles, and garlic. Stir, and cook for about 2 minutes until scallions soften.';
        $s->number = 4;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Add the carrots, stir to incorporate, and cook for about 1 minute. Add the bean sprouts and stir to incorporate.';
        $s->number = 5;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Add soaked rice noodles and stir to evenly distribute all ingredients, then stir for 1-2 minutes to heat the noodles through.';
        $s->number = 6;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Add the sauce and stir to combine.';
        $s->number = 7;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Add the tufu, stir to incorporate, and remove the pan from heat.';
        $s->number = 8;
        $s->recipe_id = 1;
        $s->save();

        $s = new Step;
        $s->step = 'Serve immediately with nuts, bean sprouts, scallions and chilies (if desired)';
        $s->number = 9;
        $s->recipe_id = 1;
        $s->save();
    }
}
