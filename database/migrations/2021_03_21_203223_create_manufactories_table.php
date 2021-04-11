<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('manufactory_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufactory_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['manufactory_id', 'locale']);
            $table->foreign('manufactory_id')->references('id')->on('manufactories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufactory_translations');
        Schema::dropIfExists('manufactories');
    }
}
