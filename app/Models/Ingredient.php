<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Group;
use App\Models\Recipe;


class Ingredient extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'ingredient_preparation_quantity_recipes');
    }
}
