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
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('origin_airport_code')->unique();
            $table->foreign('origin_airport_code')->references('airport_code')->on('airports')->onDelete('cascade')->onUpdate('cascade');
            $table->string('destination_airport_code')->unique();
            $table->foreign('destination_airport_code')->references('airport_code')->on('airports')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('directions');
    }
};
