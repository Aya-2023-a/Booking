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
        Schema::create('flight_seat_prices', function (Blueprint $table) {
            $table->bigInteger('flight_id')->unsigned();
            $table->bigInteger('airplane_id')->unsigned();
            $table->string('seat_id');
            $table->double('price');
            $table->foreign('flight_id')->references('id')->on('flight_schedules')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('airplane_id')->references('airplane_id')->on('airplane_seats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seat_id')->references('seat_id')->on('airplane_seats')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['flight_id','seat_id', 'airplane_id']);
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
        Schema::dropIfExists('flight_seat_prices');
    }
};
