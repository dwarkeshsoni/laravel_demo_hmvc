<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_managers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ads_manager_id');
            $table->string('title');
            $table->string('beacon_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('status');
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
        Schema::drop('schedule_managers');
    }
}
