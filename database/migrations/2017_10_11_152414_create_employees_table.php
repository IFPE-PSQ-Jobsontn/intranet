<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siape',10)->unique();
            $table->string('unique_identification',12)->unique();
            $table->string('occupation',10);
            $table->string('class',1);
            $table->string('level',3);
            $table->string('function',10);
            $table->integer('person_id')->unsigned();
            $table->integer('departament_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('departament_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
