<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Quantity;

class Measurement extends Model
{
    use HasFactory;

    public function quantities() {
        return $this->hasMany(Quantity::class);
    } 

}
