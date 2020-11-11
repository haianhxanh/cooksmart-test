<?php

namespace Database\Seeders;
use App\Models\Measurement;
use Illuminate\Database\Seeder;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Measurement;
        $m->name = 'cup(s)';
        $m->save();

        $m = new Measurement;
        $m->name = 'tsp';
        $m->save();

        $m = new Measurement;
        $m->name = 'tbsp';
        $m->save();

        $m = new Measurement;
        $m->name = 'oz';
        $m->save();

        $m = new Measurement;
        $m->name = 'ml';
        $m->save();

        $m = new Measurement;
        $m->name = 'l';
        $m->save();

        $m = new Measurement;
        $m->name = 'kg';
        $m->save();

        $m = new Measurement;
        $m->name = 'g';
        $m->save();
    }
}
