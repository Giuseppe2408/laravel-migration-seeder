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
            $table->smallIncrements('id');
            $table->string('factory');
            $table->string('start_station');
            $table->string('arrive_station');
            $table->dateTime('start', 0);
            $table->dateTime('end', 0);
            $table->smallInteger('wagons_number');
            $table->string('train_code');
            $table->string('in_time');
            $table->string('not_in_time');
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
