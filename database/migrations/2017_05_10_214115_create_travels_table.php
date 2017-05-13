<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Travels', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('driver_id');
          $table->string('starting_point');
          $table->string('destination');
			 //$table->integer('price'); WHY BUNY?
          //$table->integer('seatsAvailable');
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
        Schema::drop('travels');
    }
}
