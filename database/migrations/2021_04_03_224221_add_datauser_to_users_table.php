<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatauserToUsersTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_number')->nullable();
            $table->date('id_expiry_date')->nullable();
            $table->date('driver_id_expiry_date')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('address')->nullable();
            $table->string('post_box')->nullable();
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
            $table->dropColumn('id_number');
            $table->dropColumn('id_expiry_date');
            $table->dropColumn('driver_id_expiry_date');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('nationality');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('post_box');
        });
    }
}
