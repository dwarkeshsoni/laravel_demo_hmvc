<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmBeaconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beacon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type',50);
            $table->string('area');
            $table->integer('floorplan_id');
            $table->integer('project_id');
            $table->string('major_id');
            $table->string('minor_id');
            $table->string('uuid');
            $table->string('macid');
            $table->string('beacon_X');
            $table->string('beacon_Y');
            $table->string('display_X');
            $table->string('display_Y');
            $table->integer('node_id');
            $table->string('broadcasting_interval');
            $table->string('tx_power');
            $table->integer('status');
            $table->string('placeId');
            $table->string('beaconName');
            $table->string('advertiseId');
            $table->string('device_type');
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
        Schema::drop('beacon');
    }
}
