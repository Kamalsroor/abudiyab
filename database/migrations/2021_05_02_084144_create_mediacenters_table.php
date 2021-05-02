<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediacentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediacenters', function (Blueprint $table) {
            $table->id();
            $table->boolean('show');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mediacenter_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mediacenter_id');
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['mediacenter_id', 'locale']);
            $table->foreign('mediacenter_id')->references('id')->on('mediacenters')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mediacenter_translations');
        Schema::dropIfExists('mediacenters');
    }
}
