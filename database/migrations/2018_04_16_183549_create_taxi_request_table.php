<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxiRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxi_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location', 100);
            $table->string('destination', 100);
            $table->tinyInteger('luggage')->nullable();
            $table->boolean('wheelchair_user');
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
        Schema::dropIfExists('taxi_request');
    }
}
