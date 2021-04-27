<?php

namespace Database\Seeders;

use App\Models\Custmerrequest;
use Illuminate\Database\Seeder;

class CustmerrequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Custmerrequest::factory()->count(3)->create();
    }
}
