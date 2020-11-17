<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Step;
use App\Models\Ingredient;

class Recipe extends Model
{
    use HasFactory;

    public function steps() {
        return $this->hasMany(Step::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'ingredient_preparation_quantity_recipes');
    }
}
