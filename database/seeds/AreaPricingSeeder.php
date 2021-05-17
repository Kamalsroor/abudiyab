<?php

namespace Database\Seeders;

use App\Models\AreaPricing;
use Illuminate\Database\Seeder;

class AreaPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AreaPricing::factory()->count(3)->create();
    }
}
