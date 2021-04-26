<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->integer('rental_discount')->default(0);
            $table->integer('ratio_points')->default(0);
            $table->integer('extra_hours')->default(0);
            $table->integer('allowed_Kilos')->default(0);
            $table->integer('delivery_discount_regions')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        // rental_discount
        // ratio_points
        // extra_hours
        // allowed_Kilos
        // delivery_discount_regions
        Schema::create('membership_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['membership_id', 'locale']);
            $table->foreign('membership_id')->references('id')->on('memberships')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_translations');
        Schema::dropIfExists('memberships');
    }
}
