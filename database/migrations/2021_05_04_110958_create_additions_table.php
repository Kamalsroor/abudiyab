<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additions', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('addition_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('addition_id');
            $table->string('name')->nullable();
            $table->string('mini_des')->nullable();
            $table->text('des')->nullable();
            $table->string('locale')->index();
            $table->unique(['addition_id', 'locale']);
            $table->foreign('addition_id')->references('id')->on('additions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addition_translations');
        Schema::dropIfExists('additions');
    }
}
