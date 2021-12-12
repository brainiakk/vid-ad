<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profles', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('u_id');

            $table->string('about')->nullable();
            $table->string('location')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('profile_image')->nullable();
            
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('user_profles');
    }
}
