<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustmerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custmer_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('id_number')->nullable();
            $table->date('id_expiry_date')->nullable();
            $table->date('driver_id_expiry_date')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('address')->nullable();
            $table->string('post_box')->nullable();
            $table->string('driver_number')->nullable();
            $table->boolean('is_confirmed')->default(0);
            $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('custmer_requests');
    }
}
