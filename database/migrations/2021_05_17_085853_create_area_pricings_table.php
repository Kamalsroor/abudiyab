<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_pricings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id');
            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete();
            $table->foreignId('region_to_id');
            $table->foreign('region_to_id')->references('id')->on('regions')->cascadeOnDelete();
            $table->integer('price')->nullable();

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
        Schema::dropIfExists('area_pricings');
    }
}
