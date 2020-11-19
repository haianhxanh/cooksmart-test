<?php

namespace Database\Seeders;
use App\Models\Diet;
use Illuminate\Database\Seeder;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Diet;
        $d->name = 'vegetarian';
        $d->save();

        $d = new Diet;
        $d->name = 'pescatarian';
        $d->save();

        $d = new Diet;
        $d->name = 'dairy-free';
        $d->save();
    }
}
