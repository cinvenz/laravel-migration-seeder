<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('`DepartureStation`', '`departure_station`');
            $table->renameColumn('`arrival station`', '`arrival_station`');
            $table->renameColumn('`departure time`', '`departure_time`');
            $table->renameColumn('`arrival time`', '`arrival_time`');
            $table->renameColumn('`train code`', '`train_code`');
            $table->renameColumn('`number of carriages`', '`number_of_carriages`');
            $table->renameColumn('`in time`', '`in_time`');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('`departure_station`', '`DepartureStation`');
            $table->renameColumn('`arrival_station`', '`arrival station`');
            $table->renameColumn('`departure_time`', '`departure time`');
            $table->renameColumn('`arrival_time`', '`arrival time`');
            $table->renameColumn('`train_code`', '`train code`');
            $table->renameColumn('`number_of_carriages`', '`number of carriages`');
            $table->renameColumn('`in_time`', '`in time`');
        });
    }
}
