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
        // Steps for Pad Thai with tofu
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

        ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Pan-fried duck breast with spring veg
        $s = new Step;
        $s->step = 'Cook the potatoes, halving any larger ones, in a pan of boiling salted water for 20 minutes, or until tender.';
        $s->number = 1;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Meanwhile, score the skin of the duck breast at 2cm intervals, then season with sea salt and black pepper.';
        $s->number = 2;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Place the duck skin-side down in a cold non-stick frying pan, then turn the heat on to medium-high. Cook for 8 minutes without moving it, or until the fat is well rendered and the skin is golden and crispy.';
        $s->number = 3;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Turn the duck over and cook for 4 minutes on the other side, then remove to a plate to rest, leaving the pan of duck fat on the heat.';
        $s->number = 4;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Snap the woody ends off the asparagus and add the spears to the potato pan for the last 5 minutes, adding the peas for the last 2 minutes, then drain it all and leave to stream dry.';
        $s->number = 5;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Finely chop the chilli and mint leaves (reserving a few pretty baby leaves), and place in a large bowl. Finely grate in the lemon zest and squeeze in half the juice, add 1 tablespoon of extra virgin olive oil, mix together and season to perfection.';
        $s->number = 6;
        $s->recipe_id = 2;
        $s->save();

        $s = new Step;
        $s->step = 'Halve the asparagus spears, then tip all the warm vegetables into the dressing and mix well. Divide between your plates, then slice the duck and arrange over the top. Scatter over the reserved baby mint leaves to finish.';
        $s->number = 7;
        $s->recipe_id = 2;
        $s->save();



        ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Shakshuka
        $s = new Step;
        $s->step = 'Heat a deep, large skillet or sauté pan on medium. Slowly warm olive oil in the pan. Add chopped onion, sauté for a few minutes until the onion begins to soften. Add garlic and continue to sauté till mixture is fragrant.';
        $s->number = 1;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'Add the diced bell pepper, sauté for 5-7 minutes over medium until softened.';
        $s->number = 2;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'Add tomatoes and tomato paste to pan, stir until blended. Add spices and sugar, stir, and allow mixture to simmer over medium heat for 5-7 minutes until it starts to reduce. ';
        $s->number = 3;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'At this point, you can taste the mixture and spice it according to your preferences. Add salt and pepper to taste, more sugar for a sweeter sauce, or more cayenne pepper for a spicier shakshuka (be careful with the cayenne... it is extremely spicy!).';
        $s->number = 4;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'Crack the eggs, one at a time, directly over the tomato mixture, making sure to space them evenly over the sauce. I usually place 5 eggs around the outer edge and 1 in the center. The eggs will cook "over easy" style on top of the tomato sauce.';
        $s->number = 5;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'Cover the pan. Allow mixture to simmer for 10-15 minutes, or until the eggs are cooked and the sauce has slightly reduced. Keep an eye on the skillet to make sure that the sauce doesn\'t reduce too much, which can lead to burning.';
        $s->number = 6;
        $s->recipe_id = 3;
        $s->save();

        $s = new Step;
        $s->step = 'Some people prefer their shakshuka eggs more runny. If this is your preference, let the sauce reduce for a few minutes before cracking the eggs on top-- then, cover the pan and cook the eggs to taste. Garnish with the chopped parsley, if desired.';
        $s->number = 7;
        $s->recipe_id = 3;
        $s->save();
        
    }

}
