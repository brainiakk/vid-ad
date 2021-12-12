<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('objective');
            $table->string('budget_type');
            $table->float('budget');
            $table->string('placement');
            $table->string('location');
            $table->string('gender');
            $table->string('age');
            $table->date('schedule');
            $table->time('start');
            $table->time('end');
            $table->string('bid_strategy');
            $table->float('bid')->nullable();
            $table->string('ad_name');
            $table->string('ad_format');
            $table->string('ad_media');
            $table->unsignedInteger('views')->default(0);
            $table->float('remaining_budget');
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('campaigns');
    }
}
