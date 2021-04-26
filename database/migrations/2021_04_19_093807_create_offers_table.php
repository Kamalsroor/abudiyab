<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->enum('discount_type', ['percentage', 'fixed']);
            $table->integer('discount_value')->default(0);
            $table->boolean('is_work')->default(0);
            $table->integer('limit')->default(0);
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->integer('type')->nullable();
            $table->text('value')->nullable();
            $table->text('branch_type')->nullable();
            $table->text('branch_value')->nullable();
            $table->integer('consumer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('offer_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id');
            $table->string('name')->nullable();
            $table->text('des')->nullable();
            $table->string('locale')->index();
            $table->unique(['offer_id', 'locale']);
            $table->foreign('offer_id')->references('id')->on('offers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_translations');
        Schema::dropIfExists('offers');
    }
}
