<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name:ar' => 'اقتصادية',
                'name:en' => 'Economy',
                'orderBy_numper' => '2',
                'vat' => '15',
            ],
            [
                'name:ar' => 'كومباكت',
                'name:en' => 'Compact',
                'orderBy_numper' => '1',
                'vat' => '15',
            ],
            [
                'name:ar' => 'سيدان صغيرة',
                'name:en' => 'Small Sedan',
                'orderBy_numper' => '4',
                'vat' => '15',
            ],
            [
                'name:ar' => 'سيدان متوسطة',
                'name:en' => 'Intermediate Sedan',
                'orderBy_numper' => '5',
                'vat' => '15',
            ],
            [
                'name:ar' => 'عائلية اقتصادية',
                'name:en' => 'Economy SUV',
                'orderBy_numper' => '3',
                'vat' => '15',
            ],
            [
                'name:ar' => 'سيدان كبير',
                'name:en' => 'Full Size Sedan',
                'orderBy_numper' => '6',
                'vat' => '15',
            ],
            [
                'name:ar' => 'كروس أوفر',
                'name:en' => 'Crossover',
                'orderBy_numper' => '7',
                'vat' => '15',
            ],
            [
                'name:ar' => 'عائلية صغيرة',
                'name:en' => 'Small SUV',
                'orderBy_numper' => '11',
                'vat' => '15',
            ],
            [
                'name:ar' => 'مميزة',
                'name:en' => 'Premium',
                'orderBy_numper' => '8',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فان صغير',
                'name:en' => 'Mini Van',
                'orderBy_numper' => '19',
                'vat' => '15',
            ],
            [
                'name:ar' => 'عائلية وسط',
                'name:en' => 'Intermediate SUV',
                'orderBy_numper' => '12',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فخمة كروس اوفر',
                'name:en' => 'Luxury Crossover',
                'orderBy_numper' => '10',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فخمة صغيرة',
                'name:en' => 'Small Luxury',
                'orderBy_numper' => '14',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فان فخمة',
                'name:en' => 'Luxury Van',
                'orderBy_numper' => '18',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فخمة متوسطة',
                'name:en' => 'Intermediate Luxury',
                'orderBy_numper' => '15',
                'vat' => '15',
            ],
            [
                'name:ar' => 'سياره رياضية',
                'name:en' => 'Sports',
                'orderBy_numper' => '9',
                'vat' => '15',
            ],
            [
                'name:ar' => 'عائلية كبيرة',
                'name:en' => 'Full Size SUV',
                'orderBy_numper' => '16',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فخمة عائلية',
                'name:en' => 'Luxury SUV',
                'orderBy_numper' => '17',
                'vat' => '15',
            ],
            [
                'name:ar' => 'فخمة كبيرة',
                'name:en' => 'Full Size Luxury',
                'orderBy_numper' => '13',
                'vat' => '15',
        ],]
        ;

        foreach ($data as $key => $value) {
            Category::create($value);
        }
        // Category::factory()->count(3)->create();
    }
}
