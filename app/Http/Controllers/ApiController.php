<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Cuisine;
use App\Models\TotalTime;
use App\Models\Diet;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // public function recipes(Request $request) {

    //     $cuisine_input = $request->input('cuisine'); //asian
    //     $time_input = $request->input('time');    //60min
    //     $diet_input = $request->input('diet'); // vegetarian

    //     $cuisine_id = Cuisine::where('name', $cuisine_input)->value('id'); // 1
    //     $time_id = TotalTime::where('time', $time_input)->value('id'); // 2
    //     $diet_id = Diet::where('name', $diet_input)->value('id'); // 1

    //     $recipes = Recipe::where('cuisine_id', $cuisine_id)->where('total_time_id', $time_id)->where('diet_id', $diet_id)->get();

    //     return compact('recipes');
    // }

    public function recipes(Request $request) {
        $cuisine_input = $request->input('cuisine', null); //asian
        $time_input = $request->input('time', null); 
        $diet_input = $request->input('diet', null); 

        $recipes = Recipe::query();

        if($cuisine_input !== null){
            $cuisine_id = Cuisine::where('name', $cuisine_input)->value('id'); // 1
            // dd($cuisine_id);
        	$recipes->where('cuisine_id', $cuisine_id);
        }

        if($time_input !== null){
        	$time_id = TotalTime::where('time', $time_input)->value('id'); // 1
        	$recipes->where('total_time_id', $time_id);
        }

        if($diet_input !== null){
        	$diet_id = Diet::where('name', $diet_input)->value('id'); // 1
        	$recipes->where('diet_id', $diet_id);
        }

        $recipes = $recipes->get();
        return compact('recipes');
    }
}
