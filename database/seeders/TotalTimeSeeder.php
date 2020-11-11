<?php

namespace Database\Seeders;

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
        $t->time = '30 minutes';
        $t->save();

        $t = new TotalTime;
        $t->time = '60 minutes';
        $t->save();

        $t = new TotalTime;
        $t->time = '90 minutes';
        $t->save();
    }
}
