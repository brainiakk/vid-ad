<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_contents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('u_id');
            $table->string('name')->default('This is name.');
            $table->string('title')->default('This is title.');
            $table->string('description')->default('This is description.');
            $table->foreignId('category_id')
                ->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('videoname')->nullable();
            $table->string('video_path')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('video_contents');
    }
}
