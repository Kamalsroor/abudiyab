<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserDataColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->string('driver_number')->nullable();
            $table->boolean('user_data_confirmed')->default(0);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('driver_number');
            $table->dropColumn('user_data_confirmed');
        });
    }
}
