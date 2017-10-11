<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->unsigned();
            $table->string('name', 255)->unique();
            $table->string('initials', 5)->unique();
            $table->string('path', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('contact', 14)->unique();
            $table->integer('manager')->unsigned();
            $table->integer('substitute_manager')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('parent')->references('id')->on('departments')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('manager')->references('id')->on('employees')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('substitute_manager')->references('id')->on('employees')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
