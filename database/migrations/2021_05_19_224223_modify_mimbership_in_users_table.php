<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class ModifyMimbershipInUsersTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('membership_id')->nullable()->change();
            $table->foreignId('branch_id')->nullable();
            // $table->foreign('branch_id')->references('id')->on('branches')->cascadeOnDelete();
            $table->foreignId('region_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete();

            // $table->string('membership_id')->nullable()->change();
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
            $table->dropColumn('membership_id');
            $table->dropColumn('branch_id');
            $table->dropColumn('region_id');
        });
    }
}
