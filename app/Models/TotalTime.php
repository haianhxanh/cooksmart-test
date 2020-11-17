<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Recipe;

class TotalTime extends Model
{
    use HasFactory;

    public function recipes() {
        return $this->hasMany(Recipe::class);
    }
}
