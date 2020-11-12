<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Recipe;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() 
    {
        // $recipe = Recipe::query()->where('id', 1)->get();

        $recipe = DB::table('recipes')->get();

        $recipe = $recipe[0];

        return view('/recipes/index', compact('recipe'));
    }
}
