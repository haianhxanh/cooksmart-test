<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Step;
use App\Models\Ingredient;
use App\Models\User;

class Recipe extends Model
{
    use HasFactory;

    public function steps() {
        return $this->hasMany(Step::class);
    }


    public function ingredientMeasurementPreparationQuantities(){
        return $this->hasMany(IngredientMeasurementPreparationQuantityRecipe::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'ingredient_measurement_preparation_quantity_recipes');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'recipe_users');
    }
}
