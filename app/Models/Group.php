<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ingredient;

class Group extends Model
{
    use HasFactory;

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    } 
}
