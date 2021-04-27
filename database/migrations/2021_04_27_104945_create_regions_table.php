<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->foreignId('master_id');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('region_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['region_id', 'locale']);
            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region_translations');
        Schema::dropIfExists('regions');
    }
}
