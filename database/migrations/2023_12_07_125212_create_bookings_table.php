<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigInteger('passenger_id')->unsigned();
            $table->bigInteger('flight_id')->unsigned();
            $table->bigInteger('airplane_id')->unsigned();
            $table->string('seat_id');
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('flight_id')->references('flight_id')->on('flight_seat_prices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('airplane_id')->references('airplane_id')->on('flight_seat_prices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seat_id')->references('seat_id')->on('flight_seat_prices')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['passenger_id','flight_id','airplane_id','seat_id']);
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
        Schema::dropIfExists('bookings');
    }
};
