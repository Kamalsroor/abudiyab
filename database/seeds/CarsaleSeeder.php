<?php

namespace Database\Seeders;

use App\Models\Carsale;
use Illuminate\Database\Seeder;

class CarsaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carsale::factory()->count(3)->create();
    }
}
