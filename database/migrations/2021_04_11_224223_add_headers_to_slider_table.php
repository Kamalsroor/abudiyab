<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class AddHeadersToSliderTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slider_translations', function (Blueprint $table) {
            $table->string('first_header')->nullable();
            $table->string('second_header')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slider_translations', function (Blueprint $table) {
            $table->dropColumn('first_header');
            $table->dropColumn('second_header');
        });
    }
}
