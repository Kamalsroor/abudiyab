<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            // $table->foreignId('branch_id');
            // $table->foreign('branch_id')->references('id')->on('branches')->cascadeOnDelete();
            $table->foreignId('manufactory_id')->nullable();
            $table->foreign('manufactory_id')->references('id')->on('manufactories')->cascadeOnDelete();

            $table->string('code')->nullable();
            // $table->text('car_type')->nullable();
            $table->integer('price1')->nullable();
            $table->integer('desc')->nullable();
            $table->integer('discount_2')->nullable();
            $table->integer('discount_3')->nullable();
            $table->integer('price2')->nullable();
            $table->double('price_from_2month_to_6month')->nullable();
            $table->double('price_from_6month_to_12month')->nullable();
            $table->double('price_from_1year_to_2years')->nullable();
            $table->double('price_from_2year_to_3years')->nullable();
            $table->double('price_after_from_2month_to_6month')->nullable();
            $table->double('price_after_from_6month_to_12month')->nullable();
            $table->double('price_after_from_1year_to_2years')->nullable();
            $table->double('price_after_from_2year_to_3years')->nullable();
            $table->integer('model')->nullable();
            $table->integer('door')->nullable();
            $table->integer('luggage')->nullable();
            $table->string('features', 200);
            // $table->text('type')->nullable();
            $table->float('baby_seat_price', 10, 0)->nullable();
            $table->float('shield_price', 10, 0)->nullable();
            $table->float('insurance_price', 10, 0)->nullable();
            $table->float('open_kilometers_price', 10, 0)->nullable();
            $table->float('navigation_price', 10, 0)->nullable();
            $table->float('home_delivery_price', 10, 0)->nullable();
            $table->float('intercity_price', 10, 0)->nullable();


            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('car_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['car_id', 'locale']);
            $table->foreign('car_id')->references('id')->on('cars')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_translations');
        Schema::dropIfExists('cars');
    }
}
