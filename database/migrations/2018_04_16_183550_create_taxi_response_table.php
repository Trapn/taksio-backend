<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxiResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxi_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expected_time', 45);
            $table->float('price', 8, 2);
            $table->timestamps();

            $table->unsignedInteger('taxi_id');
            $table->foreign('taxi_id')->references('id')->on('taxis');

            $table->unsignedInteger('taxi_request_id');
            $table->foreign('taxi_request_id')->references('id')->on('taxi_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxi_responses');
    }
}
