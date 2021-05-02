<?php

namespace Database\Seeders;

use App\Models\Mediacenter;
use Illuminate\Database\Seeder;

class MediacenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mediacenter::factory()->count(3)->create();
    }
}
