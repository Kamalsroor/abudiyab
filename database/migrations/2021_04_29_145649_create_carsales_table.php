<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carsales', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id')->nullable();
            $table->bigInteger('couter')->nullable();
            $table->string('color_interior')->nullable();
            $table->string('color_exterior')->nullable();
            $table->string('quantity')->nullable();
            $table->boolean('for_sale')->nullable();
            $table->boolean('sold')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carsales');
    }
}
