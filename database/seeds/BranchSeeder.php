<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
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
                'name:ar' => 'المكتب الرئيسى - الرياض',
                'name:en' => 'HO OFFICE',
                'code' => '1',
                'p_coud' => '111114001',
            ],
            [
                'name:ar' => 'مكتب الشركات - الرياض',
                'name:en' => 'RIYADH -COMPAMNY OFFICE',
                'code' => '1',
                'p_coud' => '111114002',
            ],
            [
                'name:ar' => 'صالة 5 - RIYADH -AIRPORT',
                'name:en' => 'صالة 5 - King Khalid Airport',
                'code' => '1',
                'p_coud' => '111114003',
            ],
            [
                'name:ar' => 'مكتب المطار القديم',
                'name:en' => 'OLD AIR PORT OFFICE',
                'code' => '1',
                'p_coud' => '111114004',
            ],
            [
                'name:ar' => 'مكتب العليا العام',
                'name:en' => 'OLIA OFFICE',
                'code' => '1',
                'p_coud' => '111114005',
            ],
            [
                'name:ar' => 'مكتب السليمانية',
                'name:en' => 'SOLIMAIYA OFFICE',
                'code' => '1',
                'p_coud' => '111114006',
            ],
            [
                'name:ar' => 'مكتب الصناعية',
                'name:en' => 'SENAIYA OFFICE',
                'code' => '1',
                'p_coud' => '111114007',
            ],
            [
                'name:ar' => 'مكتب الدائرى',
                'name:en' => 'EXIT 10 OFFICE',
                'code' => '1',
                'p_coud' => '111114008',
            ],
            [
                'name:ar' => 'صالة 2 - RIYADH -AIRPORT',
                'name:en' => 'صالة 2 - King Khalid Airport',
                'code' => '1',
                'p_coud' => '111114009',
            ],
            [
                'name:ar' => 'مكتب دوار الكويت',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114010',
            ],
            [
                'name:ar' => 'مكتب أسواق طيبة',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114011',
            ],
            [
                'name:ar' => 'مكتب الياسمين',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114012',
            ],
            [
                'name:ar' => 'مكتب العريجاء',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114013',
            ],
            [
                'name:ar' => 'مكتب ظهرة لبن',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114014',
            ],
            [
                'name:ar' => 'فندق الانتركونتينينتال - الرياض',
                'name:en' => 'RIYADH INTRCON',
                'code' => '1',
                'p_coud' => '111114015',
            ],
            [
                'name:ar' => 'فندق الماريوت - الرياض',
                'name:en' => 'فندق الماريوت - الرياض',
                'code' => '1',
                'p_coud' => '111114016',
            ],
            [
                'name:ar' => 'فندق كراون بلازا',
                'name:en' => 'CROWNE PLAZA RIYADH MINHAL',
                'code' => '1',
                'p_coud' => '111114017',
            ],
            [
                'name:ar' => 'فندق كورتيارد الرياض',
                'name:en' => 'courtyard marriott',
                'code' => '1',
                'p_coud' => '111114018',
            ],
            [
                'name:ar' => 'مكتب أون لاين الرياض',
                'name:en' => 'DAWAR EL KIWITE OFFICE',
                'code' => '1',
                'p_coud' => '111114021',
            ],
            [
                'name:ar' => 'مكتب  اون لاين  -جدة',
                'name:en' => 'JEDDAH - HEAD OFFICE',
                'code' => '2',
                'p_coud' => '112114001',
            ],
            [
                'name:ar' => 'مكتب الشركات -جدة',
                'name:en' => 'JEDDAH  - COMPANY OFFICE',
                'code' => '2',
                'p_coud' => '112114002',
            ],
            [
                'name:ar' => 'مطار الملك عبد العزيز - جدة',
                'name:en' => 'KING ABDULAZIZ AIRPORT',
                'code' => '2',
                'p_coud' => '112114003',
            ],
            [
                'name:ar' => 'مكتب الستين - جدة',
                'name:en' => 'JEDDAH - SITTEN OFFICE',
                'code' => '2',
                'p_coud' => '112114004',
            ],
            [
                'name:ar' => 'مكتب فلسطين - جدة',
                'name:en' => 'JEDDAH - FHALISTINE OFFICE',
                'code' => '2',
                'p_coud' => '112114005',
            ],
            [
                'name:ar' => 'مكتب السبعين - جدة',
                'name:en' => 'JEDDAH - SABAIN OFFICE',
                'code' => '2',
                'p_coud' => '112114006',
            ],
            [
                'name:ar' => 'مكتب شارع صاري - جدة',
                'name:en' => 'JEDDAH - SARI OFFICE',
                'code' => '2',
                'p_coud' => '112114007',
            ],
            [
                'name:ar' => 'مكتب طريق المدينة -جدة',
                'name:en' => 'JEDDAH - TARIQ MADINAH OFFICE',
                'code' => '2',
                'p_coud' => '112114008',
            ],
            [
                'name:ar' => 'فندق الانتركونتيال - جدة',
                'name:en' => 'INTERCONTINENTAL HOTEL JEDDAH',
                'code' => '2',
                'p_coud' => '112114015',
            ],
            [
                'name:ar' => ' فندق الكراون - جدة',
                'name:en' => 'CRAWONE PLAZA HOTEL JEDDAH',
                'code' => '2',
                'p_coud' => '112114016',
            ],
            [
                'name:ar' => 'المكتب الرئيسي -الدمام',
                'name:en' => 'DAMMAM - HEAD OFFICE',
                'code' => '3',
                'p_coud' => '113114001',
            ],
            [
                'name:ar' => 'مكتب الشركات- الدمام',
                'name:en' => 'DAMMAM - COMPANY OFFICE',
                'code' => '3',
                'p_coud' => '113114002',
            ],
            [
                'name:ar' => 'مطار الملك فهد - الدمام',
                'name:en' => 'King Fahad  Airport',
                'code' => '3',
                'p_coud' => '113114003',
            ],
            [
                'name:ar' => 'مكتب الدمام 1',
                'name:en' => 'DAMMAM - DAMMAM 1',
                'code' => '3',
                'p_coud' => '113114004',
            ],
            [
                'name:ar' => 'مكتب الدوحة',
                'name:en' => 'DAMMAM - DOHA OFFICE',
                'code' => '3',
                'p_coud' => '113114005',
            ],
            [
                'name:ar' => 'مكتب الخبر',
                'name:en' => 'DAMMAM - ALKHOBAR HEAD OFFICE',
                'code' => '3',
                'p_coud' => '113114006',
            ],
            [
                'name:ar' => 'مكتب أون لاين الدمام',
                'name:en' => 'مكتب أون لاين الدمام',
                'code' => '3',
                'p_coud' => '113114007',
            ],
            [
                'name:ar' => 'فندق الميرديان - الدمام',
                'name:en' => 'فندق الميرديان - الدمام',
                'code' => '3',
                'p_coud' => '113114010',
            ],
            [
                'name:ar' => 'المكتب الرئيسي -ابها',
                'name:en' => 'ABHA - HEAD OFFICE',
                'code' => '4',
                'p_coud' => '114114001',
            ],
            [
                'name:ar' => 'مكتب الشركات - ابها',
                'name:en' => 'ABHA - COMPANY OFFICE',
                'code' => '4',
                'p_coud' => '114114002',
            ],
            [
                'name:ar' => 'مكتب مطار أبها الاقليمي',
                'name:en' => 'ABHA - AIRPORT OFFICE',
                'code' => '4',
                'p_coud' => '114114003',
            ],
            [
                'name:ar' => 'مكتب خميس مشيط - ابها',
                'name:en' => 'ABHA - KHAMIS OFFICE',
                'code' => '4',
                'p_coud' => '114114004',
            ],
            [
                'name:ar' => 'مكتب دوار القصبة -ابها',
                'name:en' => 'ABHA - ALKASABA OFFICE',
                'code' => '4',
                'p_coud' => '114114005',
            ],
            [
                'name:ar' => 'مكتب العرفج -ابها',
                'name:en' => 'ABHA - AL ARFAGA OFFICE',
                'code' => '4',
                'p_coud' => '114114006',
            ],

        ];

        foreach ($data as $key => $value) {
            Branch::create($value);
        }

        // Branch::factory()->count(3)->create();
    }
}
