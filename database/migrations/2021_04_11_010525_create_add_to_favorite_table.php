<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddToFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_to_favorite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->nullable();
            $table->foreign('car_id')->references('id')->on('cars')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_to_favorite');
    }
}
