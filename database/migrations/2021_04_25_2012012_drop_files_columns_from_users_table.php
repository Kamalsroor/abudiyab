<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class dropFilesColumnsFromUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['id_number', 'id_expiry_date', 'driver_id_expiry_date','date_of_birth', 'nationality', 'gender','address', 'user_data_confirmed']);
        });
    }
}
