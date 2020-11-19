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

        ////////////////////////////////////////////////////////////////////////////////////////
        // Colombian Chicken Stew 
        $s = new Step;
        $s->step = 'Put all of the ingredients for the sauce in a blender and blend until smooth, then set aside.';
        $s->number = 1;
        $s->recipe_id = 4;
        $s->save();

        $s = new Step;
        $s->step = 'Season chicken with salt and pepper, skin side first.';
        $s->number = 2;
        $s->recipe_id = 4;
        $s->save();

        $s = new Step;
        $s->step = 'Heat oil in a large pot or dutch oven at medium high heat. Add chicken skin side down and season again on the opposite side. Brown for about 4-5 minutes on each side.';
        $s->number = 3;
        $s->recipe_id = 4;
        $s->save();

        $s = new Step;
        $s->step = 'Add potatoes, cassava, tomato sauce, water and aliños and stir well. Bring to a boil, cover, lower heat to medium low and cook for 30-35 minutes or until potatoes and cassava are cooked through.';
        $s->number = 4;
        $s->recipe_id = 4;
        $s->save();

        $s = new Step;
        $s->step = 'Once cooked, taste for seasoning and add more salt if needed. Garnish with chopped cilantro and serve with white rice and avocado.';
        $s->number = 5;
        $s->recipe_id = 4;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Beef and Bean Chili
        $s = new Step;
        $s->step = 'In a preheated on a medium high pot add 15g oil and ground beef';
        $s->number = 1;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Add salt and pepper to taste, cook ground beef for 5 to 8 minutes';
        $s->number = 2;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Now add garlic and onion, combine and continue to cook for 3 to 5 minutes';
        $s->number = 3;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Next add  and combine all dry seasonings and spices to cooked ground beef';
        $s->number = 4;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Now add tomato paste, combine and cook for a minute or two';
        $s->number = 5;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Next add beef broth, stir and mix well';
        $s->number = 6;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Add chopped chipotle pepper, adobo sauce and bring to a boil';
        $s->number = 7;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Cover pot with a lid, lower the heat and gently simmer for 20 minutes or more(optional) stirring through out';
        $s->number = 8;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'After and hour add cornstarch slurry to thicken chili';
        $s->number = 9;
        $s->recipe_id = 5;
        $s->save();

        $s = new Step;
        $s->step = 'Add drained and rinsed pinto beans combine and simmer for and additional 15 minutes then serve';
        $s->number = 10;
        $s->recipe_id = 5;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Veggie Carbonara
        $s = new Step;
        $s->step = 'Put a large pan of salted water on to boil. Halve the courgettes lengthways and scoop out and discard the core, then slice the courgettes at an angle into small diagonal pieces. Put the spaghetti in the pan of boiling water and cook following pack instructions.';
        $s->number = 1;
        $s->recipe_id = 6;
        $s->save();

        $s = new Step;
        $s->step = 'To make the creamy carbonara sauce, put the egg yolks in a bowl, add half of the grated cheese, and mix with a fork. Add up to 3 tbsp water to make the sauce less thick. Season and set aside.';
        $s->number = 2;
        $s->recipe_id = 6;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a large frying pan on a medium to high heat and pour in a little olive oil. Fry the courgette slices and thyme leaves with a good grinding of black pepper for a minute or two until the courgette starts to soften, then add the mushrooms. Fry for 2-3 mins until golden and slightly softened. For the last minute of the cooking, add the garlic.';
        $s->number = 3;
        $s->recipe_id = 6;
        $s->save();

        $s = new Step;
        $s->step = 'Working quickly, drain the pasta, reserving a little of the cooking water. Toss the pasta in the pan with the courgettes and mushrooms, then remove from the heat and add a ladleful of the reserved cooking water and the egg and cheese sauce. Add the fresh parsley, if using, and the lemon zest and juice, then sprinkle over most of the remaining cheese. Stir everything together quickly to coat the pasta. The egg will cook if the pasta is still hot. If you’re worried about it, put back on the heat for 1 min.';
        $s->number = 4;
        $s->recipe_id = 6;
        $s->save();

        $s = new Step;
        $s->step = 'Pour in a little more of the cooking water, if needed. You should have a silky and shiny sauce. Season to taste, then sprinkle with a little more cheese to serve. Eat straight away, as the sauce can become thick and stodgy if left for too long.';
        $s->number = 5;
        $s->recipe_id = 6;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Easy Egg Fried Rice
        $s = new Step;
        $s->step = 'Beat eggs well with pinch of salt and slice green onions. Set aside.';
        $s->number = 1;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a wok or a skillet over high heat; add 10g  cooking oil and swirl to coat. Pour beaten eggs into the wok and scramble. ';
        $s->number = 2;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'When the eggs are cooked 3/4 way, add remaining 5g cooking oil and cold jasmine rice.';
        $s->number = 3;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'A day old cold jasmine rice is my absolute favorite to make fried rice. It has beautiful aroma and fluffy texture that can hold the shape well while frying.';
        $s->number = 4;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'Add soy sauce around the edge of the wok, so it will burn slightly for the smoky umami flavor. Add salt to your taste and mix everything well. Reduce heat to low if you need to.';
        $s->number = 5;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'Turn off the heat, stir in green onions.';
        $s->number = 6;
        $s->recipe_id = 7;
        $s->save();

        $s = new Step;
        $s->step = 'Enjoy with any other dishes you decided to serve with!';
        $s->number = 7;
        $s->recipe_id = 7;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Ham Cheese and Onion Empanadas
        $s = new Step;
        $s->step = 'Mix butter, vinegar, salt, and 260g  lukewarm water in a large bowl until well combined. Gradually add 1400g flour, mixing with a wooden spoon or your hands until a shaggy dough forms.';
        $s->number = 1;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Transfer dough to a lightly floured surface and knead until mostly smooth and no dry spots remain, about 2 minutes. Form into a disk, wrap in plastic, and chill until cold, at least 2 hours.';
        $s->number = 2;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Heat olive oil in a large skillet over medium-high until shimmering. Cook onions, stirring occasionally, until golden and softened, 5–7 minutes. Season with salt and pepper; mix in oregano. Transfer to a large bowl and chill until cool enough to handle, about 20 minutes.';
        $s->number = 3;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Add ham to chilled onions and toss to combine. Taste and season with salt and pepper.';
        $s->number = 4;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Toss mozzarella and cornstarch in a medium bowl to coat (this will prevent the mozzarella from liquefying as the empanadas cook).';
        $s->number = 5;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Divide dough into 6 pieces. Cover all but 1 piece with plastic wrap and keep chilled. Roll out dough to a rectangle about 15x10" and 1/16" thick. Using 4½" cutter, punch out 6 rounds. Roll out scraps to 1/16" thick to punch out another round or two.';
        $s->number = 6;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Place about 15g ham mixture in the center of dough circle. Top with 1 or 2 pieces of cheese, breaking cheese up if needed. Using your fingers, brush water halfway around edge of each round. Fold dry side up and over filling to create a semicircle. Pinch edges to seal; crimp with your fingers. Transfer to a parchment–lined rimmed baking sheet. Chill while you repeat with remaining dough and filling. Chill empanadas at least 20 minutes before frying.';
        $s->number = 7;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Pour vegetable oil into a large heavy pot or Dutch oven fitted with deep-fry thermometer to a depth of 3". Heat over medium-high until thermometer registers 350°. Working in batches of about 5 at a time and adjusting heat to maintain oil temperature, fry empanadas, turning often, until deep golden brown, about 4 minutes total.';
        $s->number = 8;
        $s->recipe_id = 8;
        $s->save();

        $s = new Step;
        $s->step = 'Transfer to a wire rack. Let cool slightly before serving.';
        $s->number = 9;
        $s->recipe_id = 8;
        $s->save();
        
    }

}
