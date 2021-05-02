<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(BranchSeeder::class);
$this->call(CategorySeeder::class);
$this->call(CarSeeder::class);
$this->call(ManufactorySeeder::class);
$this->call(SliderSeeder::class);
$this->call(OrderSeeder::class);
$this->call(PartnerSeeder::class);
$this->call(OfferSeeder::class);
// $this->call(WorkSeeder::class);
// $this->call(MembershipSeeder::class);
// $this->call(RegionSeeder::class);
$this->call(WorkSeeder::class);
$this->call(MembershipSeeder::class);
$this->call(CustmerrequestSeeder::class);
$this->call(CarsaleSeeder::class);
$this->call(MediacenterSeeder::class);
$this->call(PurchaserequestSeeder::class);
/*  The seeders of generated crud will set here: Don't remove this line  */

    }
}
