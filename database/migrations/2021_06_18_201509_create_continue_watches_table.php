<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContinueWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continue_watches', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('v_id');
            $table->foreign('v_id')->references('id')->on('video_contents')->onDelete('cascade')->onUpdate('cascade');
            
            $table->string("time");
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
        Schema::dropIfExists('continue_watches');
    }
}
