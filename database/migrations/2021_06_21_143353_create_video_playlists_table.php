<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_playlists', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('video_id');
            $table->foreign('video_id')->references('id')->on('video_contents')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('playlist_id');
            $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('video_playlists');
    }
}
