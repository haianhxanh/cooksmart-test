<?php

namespace Database\Seeders;
use App\Models\Quantity;
use Illuminate\Database\Seeder;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // 1 cup
        $q = new Quantity;
        $q->amount = 1;
        $q->measurement_id = 1;
        $q->save();

        // 2 cups
        $q = new Quantity;
        $q->amount = 2;
        $q->measurement_id = 1;
        $q->save();

        // 1 tsp
        $q = new Quantity;
        $q->amount = 1;
        $q->measurement_id = 2;
        $q->save();

        // 2 tsp
        $q = new Quantity;
        $q->amount = 2;
        $q->measurement_id = 2;
        $q->save();

        // 3 tsp
        $q = new Quantity;
        $q->amount = 3;
        $q->measurement_id = 2;
        $q->save();

        // 1 tbsp
        $q = new Quantity;
        $q->amount = 1;
        $q->measurement_id = 3;
        $q->save();

        // 2 tbsp
        $q = new Quantity;
        $q->amount = 2;
        $q->measurement_id = 3;
        $q->save();

        // 3 tbsp
        $q = new Quantity;
        $q->amount = 3;
        $q->measurement_id = 3;
        $q->save();

        // 50ml
        $q = new Quantity;
        $q->amount = 50;
        $q->measurement_id = 5;
        $q->save();

        // 100ml
        $q = new Quantity;
        $q->amount = 100;
        $q->measurement_id = 5;
        $q->save();

        // 200ml
        $q = new Quantity;
        $q->amount = 200;
        $q->measurement_id = 5;
        $q->save();

        // 100gr
        $q = new Quantity;
        $q->amount = 100;
        $q->measurement_id = 8;
        $q->save();

        // 200gr
        $q = new Quantity;
        $q->amount = 200;
        $q->measurement_id = 8;
        $q->save();

        // 300gr
        $q = new Quantity;
        $q->amount = 200;
        $q->measurement_id = 8;
        $q->save();
    }
}
