<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function recipes(Request $request) {

        $cuisine = $request->input('cuisine');

        $recipes = Recipe::get();

        return compact('recipes');
        
    }
}
