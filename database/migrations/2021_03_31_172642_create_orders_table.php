<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('delivery_date')->nullable();
            $table->date('reciving_date')->nullable();
            $table->integer('price')->nullable();
            $table->integer('days')->nullable();
            $table->text('features_added')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_id')->nullable();
            $table->foreignId('receiving_branch_id');
            $table->foreign('receiving_branch_id')->references('id')->on('branches')->cascadeOnDelete();
            $table->foreignId('delivery_branch');
            $table->foreign('delivery_branch')->references('id')->on('branches')->cascadeOnDelete();
            $table->boolean('visa_buy')->default(0);
            $table->foreignId('car_id');
            $table->foreign('car_id')->references('id')->on('cars')->cascadeOnDelete();

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
        Schema::dropIfExists('orders');
    }
}
