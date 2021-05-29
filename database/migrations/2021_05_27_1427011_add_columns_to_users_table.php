<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table)
        {
            $table->string('code')->nullable();
            $table->string('open_date')->nullable();
            $table->string('stopflag')->nullable();
            $table->string('ntnlty_code')->nullable();
            $table->string('cust_class')->nullable();
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
            $table->dropColumn('code');
            $table->dropColumn('open_date');
            $table->dropColumn('stopflag');
            $table->dropColumn('ntnlty_code');
            $table->dropColumn('cust_class');
        });
    }
}
