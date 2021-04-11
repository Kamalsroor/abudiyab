<?php

namespace Database\Seeders;

use App\Models\Manufactory;
use Illuminate\Database\Seeder;

class ManufactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [

            [
                'name:en' => 'Toyota',
                'name:ar' => 'تويوتا',
            ],
            [
                'name:en' => 'Volkswagen',
                'name:ar' => 'فولكس فاجن',
            ],
            [
                'name:en' => 'Hyundai',
                'name:ar' => 'هيونداي',
            ],
            [
                'name:en' => 'Ford',
                'name:ar' => 'معقل',
            ],
            [
                'name:en' => 'Nissan',
                'name:ar' => 'نيسان',
            ],
            [
                'name:en' => 'Honda',
                'name:ar' => 'هوندا',
            ],
            [
                'name:en' => 'Fiat',
                'name:ar' => 'فيات',
            ],
            [
                'name:en' => 'Renault',
                'name:ar' => 'رينو',
            ],
            [
                'name:en' => 'Suzuki',
                'name:ar' => 'سوزوكي',
            ],
            [
                'name:en' => 'BMW',
                'name:ar' => 'بي إم دبليو',
            ],
            [
                'name:en' => 'Geely',
                'name:ar' => 'جيلي',
            ],
            [
                'name:en' => 'BYD',
                'name:ar' => 'BYD',
            ],
            [
                'name:en' => 'Volvo',
                'name:ar' => 'فولفو',
            ],
            [
                'name:en' => 'Ferrari',
                'name:ar' => 'فيراري',
            ],
            [
                'name:en' => 'jeep',
                'name:ar' => 'جيب',
            ],
            [
                'name:en' => 'Kia',
                'name:ar' => 'كيا',
            ],
            [
                'name:en' => 'Geely',
                'name:ar' => 'جيلي',
            ],
            [
                'name:en' => 'range Rover',
                'name:ar' => 'رينج روفر',
            ],
            [
                'name:en' => 'Mercedes',
                'name:ar' => 'مرسيدس',
            ],
            [
                'name:en' => 'Changan',
                'name:ar' => 'تشانجان',
            ],
            [
                'name:en' => 'Mazda',
                'name:ar' => 'مازدا',
            ],
            [
                'name:en' => 'Chevrolet',
                'name:ar' => 'شيفروليه',
            ],
            [
                'name:en' => 'Mitsubishi',
                'name:ar' => 'ميتسوبيشي',
            ],

        ];

        foreach ($data as $key => $value) {
            Manufactory::create($value);
        }

        // Manufactory::factory()->count(3)->create();
    }
}
