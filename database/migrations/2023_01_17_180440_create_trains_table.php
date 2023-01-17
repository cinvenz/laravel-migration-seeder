<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency', 100);
            $table->string('departure station', 200);
            $table->string('arrival station', 200);
            $table->time('departure time');
            $table->time('arrival time');
            $table->mediumInteger('train code', false, true);
            $table->tinyInteger('number of carriages', false, true)->nullable();
            $table->boolean('in time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
