<?php

namespace Database\Seeders;

use App\Models\Purchaserequest;
use Illuminate\Database\Seeder;

class PurchaserequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchaserequest::factory()->count(3)->create();
    }
}
