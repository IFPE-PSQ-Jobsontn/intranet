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
            $table->string('car_plate', 7)->unique();
            $table->string('renavam', 9)->unique();
            $table->string('chassis', 17)->unique();
            $table->integer('year_manufacture')->unsigned();
            $table->integer('year_model')->unsigned();
            $table->string('manufacturer', 255);
            $table->string('model', 255);
            $table->string('species', 100);
            $table->string('bodywork', 100);
            $table->string('type', 100);
            $table->string('color', 50);
            $table->enum('fuel',
                array(
                    'ÁLCOOL',
                    'ÁLCOOL / GNC',
                    'DIESEL',
                    'DIESEL / GNC',
                    'ELFONT EX',
                    'ELFONT IN',
                    'GÁS METANO',
                    'GASOGÊNIO',
                    'GASOL / GNC',
                    'GASOLINA',
                    'ÁLCOOL / GASOLINA',
                    'ÁLCOOL / GASOL / GNV'
                )
            );
            $table->integer('person_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            //$table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('restrict');
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
