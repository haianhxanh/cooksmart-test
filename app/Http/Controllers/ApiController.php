<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Cuisine;
use App\Models\TotalTime;
use App\Models\Diet;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function recipes(Request $request) {

        $cuisine_input = $request->input('cuisine'); //asian
        $time_input = $request->input('time');    //60min
        $diet_input = $request->input('diet'); // vegetarian

        $cuisine_id = Cuisine::where('name', $cuisine_input)->value('id'); // 1
        $time_id = TotalTime::where('time', $time_input)->value('id'); // 2
        $diet_id = Diet::where('name', $diet_input)->value('id'); // 1

        $recipes = Recipe::where('cuisine_id', $cuisine_id)->where('total_time_id', $time_id)->where('diet_id', $diet_id)->get();

        return compact('recipes');
        
    }
}
