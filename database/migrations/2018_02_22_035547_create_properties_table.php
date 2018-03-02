<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('country');
            $table->string('city');
            $table->integer('kilometersToCenter');
            $table->text('about');
            $table->integer('rooms')->unsigned();
            $table->boolean('creditCardNeeded');
            $table->string('badge1');
            $table->string('badge2');
            $table->string('badge3');
            $table->string('badge4');
            $table->boolean('freeWifi');
            $table->boolean('airCondition');
            $table->boolean('balcony');
            $table->boolean('washingMachine');
            $table->boolean('bathroom');
            $table->boolean('spaGym');
            $table->boolean('swimmingPool');
            $table->boolean('parking');
            $table->boolean('airportShuttle');
            $table->boolean('noSmokingRoom');
            $table->boolean('petsAllowed');
            $table->string('map');

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
        Schema::drop('properties');
    }
}
