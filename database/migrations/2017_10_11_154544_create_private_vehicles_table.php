<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_plate', 7)->unique();
            $table->string('manufacturer');
            $table->string('model');
            $table->integer('color_id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_vehicles');
    }
}
