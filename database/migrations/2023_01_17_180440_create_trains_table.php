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


// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class UpdateTrainsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::table('trains', function (Blueprint $table) {
//             $table->renameColumn('`departure station`', '`departure_station`');
//             $table->renameColumn('`arrival station`', '`arrival_station`');
//             $table->renameColumn('`departure time`', '`departure_time`');
//             $table->renameColumn('`arrival time`', '`arrival_time`');
//             $table->renameColumn('`train code`', '`train_code`');
//             $table->renameColumn('`number of carriages`', '`number_of_carriages`');
//             $table->renameColumn('`in time`', '`in_time`');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::table('trains', function (Blueprint $table) {
//             $table->renameColumn('`departure_station`', '`departure station`');
//             $table->renameColumn('`arrival_station`', '`arrival station`');
//             $table->renameColumn('`departure_time`', '`departure time`');
//             $table->renameColumn('`arrival_time`', '`arrival time`');
//             $table->renameColumn('`train_code`', '`train code`');
//             $table->renameColumn('`number_of_carriages`', '`number of carriages`');
//             $table->renameColumn('`in_time`', '`in time`');
//         });
//     }
// }
