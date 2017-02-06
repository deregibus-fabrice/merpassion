<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', ['boat','jetski']);
            $table->boolean('licence');
            $table->boolean('gas');
            $table->string('engine');
            $table->integer('places');
            $table->text('equipments');
            $table->integer('deposit');
            $table->text('towSports');
            $table->integer('lowSeasonDay');
            $table->integer('seasonDay');
            $table->integer('seasonMorning');
            $table->integer('seasonAfternoon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rents');
    }
}
