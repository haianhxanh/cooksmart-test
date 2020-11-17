<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Group;
use App\Models\Ingredient;
use App\Models\Measurement;
use App\Models\Quantity;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedIngredients();
    }

    public function seedIngredients()
    {
        $groups = $this->seedGroups();

        $group_csv_files = [
            "condiments"    => 'condiments.csv',
            "dairy"         => 'dairy.csv',
            "fish"          => 'fish.csv',
            "grains"        => 'grains.csv',
            "meats"         => 'meats.csv',
            "other-ingredients" => 'other.csv',
            "spices"        => 'spices.csv',
            "vegetables"    => 'veggies.csv'
        ];

        $current_ingredients = Ingredient::with('group')->get();
        $current_ingredients_by_slug = [];
        foreach ($current_ingredients as $ingredient) {
            $ingredient_slug = Str::slug($ingredient->name);
            $group_slug = Str::slug($ingredient->group->name);
            if (isset($current_ingredients_by_slug[$group_slug][$ingredient_slug])) {
                $this->command->error('Duplicite ingredient in group ' . $ingredient->group->name . ': ' . $ingredient->name);
            }
            $current_ingredients_by_slug[$group_slug][$ingredient_slug] = $ingredient;
        }

        foreach ($groups as $group_slug => $group_id) {
            if (isset($group_csv_files[$group_slug])) {
                $ingredients = $this->getValuesFromCsv(storage_path('csv/'.$group_csv_files[$group_slug]));

                foreach ($ingredients as $ingredient_name) {
                    $ingredient_slug = Str::slug($ingredient_name);

                    if (isset($current_ingredients_by_slug[$group_slug][$ingredient_slug])) {
                        $ingredient = $current_ingredients_by_slug[$group_slug][$ingredient_slug];
                    } else {
                        $ingredient = new Ingredient;
                        $ingredient->name = $ingredient_name;
                    }

                    $ingredient->group_id = $group_id;
                    $ingredient->save();
                }
            }
        }
    }

    public function seedGroups()
    {
        $current_groups = Group::all()->pluck('name', 'id');
        $current_groups_by_slug = [];
        foreach ($current_groups as $id => $name) {
            $current_groups_by_slug[Str::slug($name)] = $id;
        }

        $csv_groups = $this->getValuesFromCsv(storage_path('csv/ingredient-groups.csv'));

        foreach ($csv_groups as $name) {
            $slug_name = Str::slug($name);

            if (!isset($current_groups_by_slug[$slug_name])) {
                $new_group = new Group;
                $new_group->name = $name;
                $new_group->save();

                $current_groups_by_slug[$slug_name] = $new_group->id;
            }
        }

        return $current_groups_by_slug;
    }

    public function getValuesFromCsv($csv_file)
    {
        $fh = fopen($csv_file, 'r');

        $values = [];

        while ($row = fgetcsv($fh, 0, ';', '"')) {
            if (trim($row[0]) !== '') { // if the first value after trimming is not empty string
                $values[] = $row[0];
            }
        }

        return $values;
    }
}
