<?php

namespace Database\Seeders;
use App\Models\TotalTime;
use Illuminate\Database\Seeder;

class TotalTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $t = new TotalTime;
        $t->time = '30';
        $t->save();

        $t = new TotalTime;
        $t->time = '60';
        $t->save();

        $t = new TotalTime;
        $t->time = '90';
        $t->save();
    }
}
