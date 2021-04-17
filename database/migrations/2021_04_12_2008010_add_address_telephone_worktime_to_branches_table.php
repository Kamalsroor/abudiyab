<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressTelephoneWorktimeToBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->string('tele_number')->nullable();
            $table->text('work_time')->nullable();
        });


        Schema::table('branch_translations', function (Blueprint $table) {
            $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropColumn('tele_number');
            $table->dropColumn('work_time');
        });
        Schema::table('branch_translations', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
}
