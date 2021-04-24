<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPricesToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->float('car_price', 8, 2)->default(0);
            $table->integer('membership_discount')->default(0);
            $table->integer('promotional_discount')->default(0);
            $table->integer('authorization_fee')->default(0);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('car_price');
            $table->dropColumn('membership_discount');
            $table->dropColumn('promotional_discount');
            $table->dropColumn('authorization_fee');
        });

    }
}
