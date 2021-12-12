<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnScheduleEndsToCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id');
            $table->date('schedule_ends')->after('schedule')->nullable();
            $table->string('cta')->nullable();
            $table->string('reject_reason')->nullable();
            $table->enum('cta_type',['link', 'tel'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            Schema::dropIfExists('campaigns');
        });
    }
}
