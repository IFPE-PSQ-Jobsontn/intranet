<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table)  {
            $table->increments('id');
            $table->string('renavam', 9)->unique();
            $table->string('car_plate', 7)->unique();
            $table->string('chassis', 17)->unique();
            $table->integer('species_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('fuel_id')->unsigned();
            $table->string('manufacturer');
            $table->string('model');
            $table->integer('year_manufacture')->unsigned();
            $table->integer('year_model')->unsigned();
            $table->integer('capacity')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('color_id')->unsigned();
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
        Schema::dropIfExists('vehicles');
    }



}
