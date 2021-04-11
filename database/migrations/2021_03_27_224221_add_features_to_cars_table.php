<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturesToCarsTable extends Migration
{

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->boolean('is_baby_seat')->default(0);
            $table->boolean('is_shield')->default(0);
            $table->boolean('is_insurance')->default(0);
            $table->boolean('is_open_kilometers')->default(0);
            $table->boolean('is_navigation')->default(0);
            $table->boolean('is_home_delivery')->default(0);
            $table->boolean('is_intercity')->default(0);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('is_baby_seat');
            $table->dropColumn('is_shield');
            $table->dropColumn('is_insurance');
            $table->dropColumn('is_open_kilometers');
            $table->dropColumn('is_navigation');
            $table->dropColumn('is_home_delivery');
            $table->dropColumn('is_intercity');
        });
    }
}
