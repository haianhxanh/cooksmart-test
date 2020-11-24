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
        $s->step = 'Add the tofu, stir to incorporate, and remove the pan from heat.';
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

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Sesame Chicken
        $s = new Step;
        $s->step = 'To prepare the chicken breast, first, trim off any excess of fat. Then slice the chicken into 2 cm cubes.';
        $s->number = 1;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'To marinate the chicken, in a big bowl, add all the marinades, mix well. Then transfer in the chicken pieces. Thoroughly combine. Let it sit for 30 minutes.';
        $s->number = 2;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'To make the sauce, in a bowl, mix in all the ingredients. Put aside.';
        $s->number = 3;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'To make the batter, in a large bowl, mix in all the ingredients for the batter. (The purpose of cornstarch is to make it crispy. You could also replace it with potato starch or sweet potato starch.) （The purpose of the baking soda is for the chicken to become airy and puffy.)';
        $s->number = 4;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'Then add the chicken pieces in the batter and mix well.';
        $s->number = 5;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'To fry the chicken, in a pot, add 4 cups of vegetable oil, or about 7 cm  deep. Heat it up to 177°C. (You can test the oil with your chopsticks. When you put the chopsticks in the pot, and if you see lots of bubbles around it, then the oil is ready.) Transfer in the chicken. Fry over high heat for about 5 minutes until they are golden brown. Take out the chicken and put aside. Skim off any crumbs. Then heat to oil to 191°C. Return the chicken and deep fry for 1 minute until crispy. (Double frying makes the chicken crispier.) Take out the chicken and drain on a paper towel.';
        $s->number = 6;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'To put everything together, in a pan, pour in the sauce. Heat it up over medium-high heat for 1 minute. Then pour in cornstarch slurry to thicken the sauce. Transfer in the chicken. Stir and coat the chicken with the sauce. Add the scallions.';
        $s->number = 7;
        $s->recipe_id = 9;
        $s->save();

        $s = new Step;
        $s->step = 'Enjoy';
        $s->number = 8;
        $s->recipe_id = 9;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Portobello Fajita Bowl
        $s = new Step;
        $s->step = 'Slice the stem off of the peppers so that they will stand steadily when flipped upside down. Slice the peppers into quarters from the bottom to the top around the core and seeds. Slice each quarter into 1-inch (2 ½ cm) thick slices. Transfer to a large bowl.';
        $s->number = 1;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Add ½ teaspoon salt, ¼ teaspoon cumin, ½ teaspoon smoked paprika, 1 teaspoon chili powder, and ½ teaspoon red pepper flakes. Toss to coat the peppers evenly in the spices and set aside.';
        $s->number = 2;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Remove the stems from the portobello mushrooms and slice into 1-inch-wide (2 cm) pieces, then transfer a large bowl.';
        $s->number = 3;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Add the remaining 1/2 teaspoon salt, 1/2 teaspoon chili powder, 1/2 teaspoon smoked paprika, 1/4 teaspoon cumin, and 1/2 teaspoon red pepper flakes.  Toss to coat the mushrooms evenly in the spices and set aside.';
        $s->number = 4;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Thinly slice the onion.';
        $s->number = 5;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Heat oil in a large cast-iron pan over medium-high heat. Add the onion and cook, stirring occasionally, until translucent, about 3 minutes. Add the garlic and bell peppers, and cook for about 5 more minutes, stirring constantly until peppers are tender. Remove the pepper and onion mixture from the pan and set aside.';
        $s->number = 6;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Add the mushrooms to the skillet and cook until the mushrooms are tender, stirring constantly, about 5 minutes';
        $s->number = 7;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Divide the brown rice between 4 food storage containers. Top each container with pico de gallo, black beans, corn, cheddar cheese, the cooked bell peppers and onions, and the sliced portobello. Garnish with an avocado slice, a lime wedge, and cilantro.';
        $s->number = 8;
        $s->recipe_id = 10;
        $s->save();

        $s = new Step;
        $s->step = 'Store in the fridge for up to 4 days.  Enjoy!';
        $s->number = 9;
        $s->recipe_id = 10;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Gluten Free Chinese Chicken
        $s = new Step;
        $s->step = 'In a small bowl, whisk the honey, gluten free soy sauce, apple cider vinegar, sesame oil and red pepper flakes together, set the bowl aside.';
        $s->number = 1;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Combine the cornstarch and brown sugar in a shallow bowl or on a rimmed plate.';
        $s->number = 2;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Place the whisked egg in a separate shallow bowl.';
        $s->number = 3;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Add the chicken to the egg, then coat it in the cornstarch mixture.';
        $s->number = 4;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Add the olive oil to a large skillet over medium-high heat.';
        $s->number = 5;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Add the chili pepper, garlic and coated chicken.';
        $s->number = 6;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Cook the chicken until slightly brown on all sides.';
        $s->number = 7;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Pour the honey sauce over the chicken, sauté 2-3 minutes.';
        $s->number = 8;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Reduce the heat to low, cover the skillet and simmer for 6-8 minutes.';
        $s->number = 9;
        $s->recipe_id = 11;
        $s->save();

        $s = new Step;
        $s->step = 'Top with the diced green onions and serve.';
        $s->number = 10;
        $s->recipe_id = 11;
        $s->save();

          ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Jollof Rice
        $s = new Step;
        $s->step = 'Blend the pepper mixture which will be used for later on, so add the tomatoes, red bell peppers, scotch bonnet peppers, and 1 of the onions to a blender. Then add a little water to help the blending process. And blend until smooth, set aside for later.';
        $s->number = 1;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Next dice one red onion into small pieces. TIP – If there’s one thing that makes a difference to jollof rice, it’s using red onions rather than yellow onions.';
        $s->number = 2;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Add half a cup of oil into the pot and once the oil is hot enough add in the diced onions and fry on a medium heat till they become translucent, this should take about 4 minutes.';
        $s->number = 3;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Next add in the tomato puree, and fry the onions and tomato puree on medium heat for 5 minutes, stirring frequently, don’t worry if it sticks to the pot a little (it’ll taste even better). TIP – Doing this and starting off your jollof rice this way really makes a difference and adds such a delicious in-depth flavour. Frying it also removes the bitter taste of uncooked purée and gives a smoky, sweet and distinctly rich flavour instead. You will know when it’s ready as the mixture looks grainy or like crumbled sand.';
        $s->number = 4;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Once the puree has fried, add in the pepper mixture blended earlier and stir in well to incorporate the fried puree properly.';
        $s->number = 5;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Now it’s time to season, so add: bay leaves, dried thyme, and a mixture of salt, Knorr chicken stock cubes and all-purpose seasoning to taste. Stir this in well and cover and leave to boil on medium heat for 15 minutes.';
        $s->number = 6;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'While the sauce is cooking, wash the rice repeatedly to remove the starch. You want to do this until the water turns clear. This step is important, do not be lazy about it, this will prevent mushy and unpleasantly sticky jollof rice.';
        $s->number = 7;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Back to the pot, after about 15 minutes the sauce is ready, you’ll see it would have thickened slightly. This is also the time to taste just in case you need to adjust the seasoning at all before adding in the rice.';
        $s->number = 8;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Next add in the washed rice and stir well to ensure rice is properly mixed in.';
        $s->number = 9;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'After this, add in just enough water to cover the rice, so the water should be just above the level of the rice. TIP – This is step is very important as adding excess amount of water will lead to soggy jollof rice which we don’t want. After adding the water stir well.';
        $s->number = 10;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Now the easy part, cover and leave the Jollof rice to cook on a very low heat. So For example if the highest setting of your cooker is 6 then reduce it to l or 2.';
        $s->number = 11;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'I stir the jollof rice every 20 minutes until it is cooked. So after the first 20 minutes stir the rice from the bottom up. Do not worry if you feel there is not enough liquid to cook the rice, there is, the steam at this point will do the remainder of the cooking. Cover the pot and continue to leave to cook for a further 20 minutes before checking at stirring again.';
        $s->number = 12;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'So after 40 minutes check the rice and stir again from bottom up. Cover and continue to leave to steam.';
        $s->number = 13;
        $s->recipe_id = 12;
        $s->save();

        $s = new Step;
        $s->step = 'Now after steaming on a low heat for a total of approximately 1 hour 10 minutes, the jollof rice is ready!  TIP – you can also shorten the cooking time by covering the rice the foil before adding the lid of the pot. However if you do so, increase the heat slightly unless it can get too soggy, so I only usually use foil if I’m in a rush.';
        $s->number = 14;
        $s->recipe_id = 12;
        $s->save();


          ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Ghanian Chicken Stew
        $s = new Step;
        $s->step = 'Wash and clean the chicken. Blend the Scotch bonnet together with one onion, garlic ginger and a little of water to help with the blending. ';
        $s->number = 1;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Add the blended spices to the meat, add magi cubes and or salt to the meat. Cover the pan with its lid and let the chicken cook for about 15 - 20 minutes.  
        * Instead of using fresh veggies you can use powdered spices to steam the chicken. ';
        $s->number = 2;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'In another pan heat vegetable oil over medium fire and fry the chicken. Remove the chicken from the pan when you are done.';
        $s->number = 3;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'When you are done frying the chicken you can use the same pan to fry the onions for about 2-3 minutes. ';
        $s->number = 4;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Now add the powdered pepper and let it cook for another 1-2 minutes. ';
        $s->number = 5;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Now add the tomato paste and mix it with the fried onions';
        $s->number = 6;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'While the onions and tomato paste are cooking, blend the tomatoes and then add it to the stew. Let the stew cook for about 7-10 minutes. ';
        $s->number = 7;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Add the spices and salt.';
        $s->number = 8;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Let the stew cook for about 5 - 7 minutes then add the fried chicken';
        $s->number = 9;
        $s->recipe_id = 13;
        $s->save();

        $s = new Step;
        $s->step = 'Let it cook some more, until the water in the tomatoes evaporates and the stew gets a brownish color.';
        $s->number = 10;
        $s->recipe_id = 13;
        $s->save();

           ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Sushi Burrito
        $s = new Step;
        $s->step = 'Wash the rice in water until the water becomes almost clear, then drain the rice and add to a saucepan with the 275ml of water. Heat to a boil then reduce the heat, cover the saucepan and simmer for 15 minutes. Remove from the heat, but leave the lid on to steam for another 5 minutes.';
        $s->number = 1;
        $s->recipe_id = 14;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a small saucepan and add the vinegar, sugar and half a teaspoon of salt. Dissolve the sugar, then pour it over the cooked rice with the sesame seeds and stir gently. Lay the rice out on a lined baking tray to cool.';
        $s->number = 2;
        $s->recipe_id = 14;
        $s->save();

        $s = new Step;
        $s->step = 'Peel the cucumber and carrot and continue peeling to get strips. Peel, de-stone and thinly slice the avocado. Mix the crab with the mayonnaise and chilli flakes. Slice the salmon fillet into long strips about ½ cm thick.';
        $s->number = 3;
        $s->recipe_id = 14;
        $s->save();

        $s = new Step;
        $s->step = 'Cover your sushi mat with a sheet of clingfilm and place down a whole sheet of nori. Cover the nori with a thin layer of sushi rice. Layer the carrot strips over the rice, at 90º to the side you will eventually roll from. Do the same thing with the cucumber strips. Spread the crab meat in a strip right along the width of the nori sheet. Lay the avocado and salmon on top of the crab.';
        $s->number = 4;
        $s->recipe_id = 14;
        $s->save();

        $s = new Step;
        $s->step = 'Now slightly dampen a second nori sheet and stick 1/3 of the sheet under the first filled sheet at the end of the strips of carrot and cucumber. Use the mat to roll up the nori around the fillings. Compress the roll with the mat. Chill just to let everything set up slightly, then wrap in baking paper or foil and slice in half on a slant.';
        $s->number = 5;
        $s->recipe_id = 14;
        $s->save();

            ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Pan Seared Salmon
        $s = new Step;
        $s->step = 'Season salmon on both sides with 1/2 salt and 1/8 tsp black pepper. Grate 1 tsp of lemon zest then squeeze 2 lemons for 4 Tbsp lemon juice. ';
        $s->number = 1;
        $s->recipe_id = 15;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a large (10-12") light colored pan over medium heat and right away add 4 Tbsp butter, swirling and stirring frequently to prevent splatter until it starts to turn light brown and the bits of butter solids turn brown (about 3-7 minutes depending on your heat)*';
        $s->number = 2;
        $s->recipe_id = 15;
        $s->save();

        $s = new Step;
        $s->step = 'Add seasoned salmon and cook uncovered on the first side 3-4 minutes until golden brown then flip and cook another 2 to 3 minutes or until fully cooked through.';
        $s->number = 3;
        $s->recipe_id = 15;
        $s->save();

        $s = new Step;
        $s->step = 'In the last 2 minutes of cooking, add 1 tsp lemon zest and 4 Tbsp lemon juice to the pan. Spoon the sauce over the salmon as it cooks. Transfer salmon to plates, drizzle with sauce and sprinkle the pan cooked salmon with freshly chopped parsley and black pepper to taste. Serve right away.';
        $s->number = 4;
        $s->recipe_id = 15;
        $s->save();

            ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Middle Eastern Spicy Potatoes
        $s = new Step;
        $s->step = 'Peel and cube potatoes. Cut about one potato per person';
        $s->number = 1;
        $s->recipe_id = 16;
        $s->save();

        $s = new Step;
        $s->step = 'Add vegetable oil to pan (generous amount) and let heat.';
        $s->number = 2;
        $s->recipe_id = 16;
        $s->save();

        $s = new Step;
        $s->step = 'Mince or pound garlic with salt and create a paste.';
        $s->number = 3;
        $s->recipe_id = 16;
        $s->save();

        $s = new Step;
        $s->step = 'Add the potaoes to the pan and try to spread out the potatoes throughout the pan to cook. Stir and let get brown and crispy';
        $s->number = 4;
        $s->recipe_id = 16;
        $s->save();

        $s = new Step;
        $s->step = 'Chop coriander and add this and garlic paste to pan and continue to cook.  You can add lemon and chili for extra flavor.';
        $s->number = 5;
        $s->recipe_id = 16;
        $s->save();

        $s = new Step;
        $s->step = 'Take off heat and add to serving dish.  Top with extra coriander or greens if desired. Enjoy!';
        $s->number = 6;
        $s->recipe_id = 16;
        $s->save();

           ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Greek Quesadillas
        $s = new Step;
        $s->step = 'Make the sauce: In a medium bowl, stir together Greek yogurt, cucumber, dill, and lemon juice. Season to taste with salt, pepper and red pepper flakes.';
        $s->number = 1;
        $s->recipe_id = 17;
        $s->save();

        $s = new Step;
        $s->step = 'In a large skillet over medium heat, heat olive oil. Add one pita half, cut-side up. Top with a handful each of mozzarella and chicken. Sprinkle with feta, red peppers, olives and dill. Top with the matching pita half, cut-side down.';
        $s->number = 2;
        $s->recipe_id = 17;
        $s->save();

        $s = new Step;
        $s->step = 'Cook until the cheese is melted and the bottom pita is golden, about 2 minutes. Carefully flip and continue to cook until the second side is golden, about 2 minutes more.';
        $s->number = 3;
        $s->recipe_id = 17;
        $s->save();

        $s = new Step;
        $s->step = 'Repeat with remaining ingredients. Cut quesadillas into wedges and serve warm with Tzatziki sauce.';
        $s->number = 4;
        $s->recipe_id = 17;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Baba Ganoush
        $s = new Step;
        $s->step = 'Preheat the grill to high heat, 230° to 250°.';
        $s->number = 1;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'Add the eggplants and cook on all sides until softened and roasted, which takes about 25 minutes.';
        $s->number = 2;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'Remove the eggplants and let cool slightly before slicing in half and scraping out the fruit inside.  Discard the peelings.';
        $s->number = 3;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'Add the eggplant to a food processor and process on high speed until smooth.';
        $s->number = 4;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'Next, add in the garlic, tahini, lemon juice, cumin, cayenne, and salt and process on high speed until smooth.';
        $s->number = 5;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'While processing on high speed slowly drizzle in the olive oil until mixed in.';
        $s->number = 6;
        $s->recipe_id = 18;
        $s->save();

        $s = new Step;
        $s->step = 'Serve and optional garnishes of olive oil, cayenne, and chopped parsley.';
        $s->number = 7;
        $s->recipe_id = 18;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Shrimp Ceviche
        $s = new Step;
        $s->step = 'Gently (and quickly) poach the shrimp in salted water (if you have very fresh shrimp, this step is not necessary).';
        $s->number = 1;
        $s->recipe_id = 19;
        $s->save();

        $s = new Step;
        $s->step = 'Cut the shrimp into 1/2 inch pieces and toss with lime juice, lemon juice, red onion, cucumber, minced chile peppers, and cilantro. Refrigerate for 30 minutes.';
        $s->number = 2;
        $s->recipe_id = 19;
        $s->save();

        $s = new Step;
        $s->step = 'Serve with diced avocado stirred into the ceviche.';
        $s->number = 3;
        $s->recipe_id = 19;
        $s->save();

          ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Chicken Peanut Soup
        $s = new Step;
        $s->step = 'Blend the tomatoes, half onion, and pepper, ginger, and garlic. Set aside.';
        $s->number = 1;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Season chicken with paprika, salt, and black pepper. Set aside.';
        $s->number = 2;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Preheat the oil and fry the seasoned chicken about 5 minutes on each side or till the chicken is well browned. Remove from heat and set aside.';
        $s->number = 3;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Add the diced onions in the oil and fry till translucent.';
        $s->number = 4;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Add the blended Tomato sauce and cook for about 6 to 10 minutes or until the sauce is well reduced and the raw tomato taste is gone.';
        $s->number = 5;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Add the peanut paste and chicken stock, and stir well to dissolve.';
        $s->number = 6;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Season with salt, pepper, seasoning powder, and thyme.';
        $s->number = 7;
        $s->recipe_id = 20;
        $s->save();

        $s = new Step;
        $s->step = 'Return the chicken back into the sauce and cook for another 15 to 20 minutes, or until the chicken is well cooked you are satisfied with the thickness of the soup. Enjoy!';
        $s->number = 8;
        $s->recipe_id = 20;
        $s->save();

         ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Korean Beef Tacos
        $s = new Step;
        $s->step = 'Place the soy sauce, mirin, sugar, sesame seeds, sesame oil, garlic and ginger in a large bowl. Add the beef and turn to coat. Marinate for at least 10 minutes or up to 2 hours.';
        $s->number = 1;
        $s->recipe_id = 21;
        $s->save();

        $s = new Step;
        $s->step = 'For the mayo, combine all the ingredients in a bowl. Set aside for later.';
        $s->number = 2;
        $s->recipe_id = 21;
        $s->save();

        $s = new Step;
        $s->step = 'Heat a char grill, barbecue plate or frying pan over high heat. Drain the beef from the marinade and cook for a minute each side to develop a nice deep colour. Then turn the heat to low and cook the steaks, turning often, for 3-4 minutes (medium-rare) or until cooked to your liking. You can also baste with leftover marinade as the steaks cook. Transfer beef to a plate and set aside for 5 minutes to rest. Thinly slice.';
        $s->number = 3;
        $s->recipe_id = 21;
        $s->save();

        $s = new Step;
        $s->step = 'Cook the tortillas in a pan or on the chargrill for 1 minute each side to until softened. Wrap them in a clean tea towel to keep warm.';
        $s->number = 4;
        $s->recipe_id = 21;
        $s->save();

        $s = new Step;
        $s->step = 'To assemble, spread a generous slick of gochujang mayo on each tortilla. Top with the cabbage, beef and kimchi. Sprinkle with spring onion and sesame seeds.';
        $s->number = 5;
        $s->recipe_id = 21;
        $s->save();

        ////////////////////////////////////////////////////////////////////////////////////////
        // Steps for Soy & Ginger Fish
        $s = new Step;
        $s->step = 'Slice the spring onion lengthways into long, thin strips. Place the spring onion in a bowl of cold water and soak until ready to serve (slices will curl).';
        $s->number = 1;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'To set up a makeshift steamer, choose a large, wide and deep pan with a tight-fitting lid. Fold and scrunch a piece of foil into a long snake shape. Then coil the shape to form a trivet. Place in the bottom of the pan.';
        $s->number = 2;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'Place fish fillets onto a plate that is smaller than your pan and top with ginger.';
        $s->number = 3;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'Combine soy sauce and lime juice, then pour the mixture over the fish.';
        $s->number = 4;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'Place the plate of fish on top of the foil trivet in your pan. Pour water into the pan (being careful not to pour any on the plate) until it comes to just below the bottom of the plate. Turn the heat on high. Once the water starts to steam, place the lid on. Cook for about 12 minutes (or a bit longer for salmon) or until the fish fillets are cooked (they will easily flake when poked with a fork).';
        $s->number = 5;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'Just before the fish is ready, place the vegetable oil and the sesame oil in a small saucepan. Heat until a wooden spoon causes bubbles to form when placed into the oil. Turn the heat off but keep the oil warm on the stovetop.';
        $s->number = 6;
        $s->recipe_id = 22;
        $s->save();

        $s = new Step;
        $s->step = 'Use a tea towel to protect your hands as you carefully remove the hot plate of fish from the pan. Top with spring onion. Pour the hot oil over the spring onion to sizzle and cook the onion a little. Top with chilli slices and serve with steamed rice.';
        $s->number = 7;
        $s->recipe_id = 22;
        $s->save();

    }

}
