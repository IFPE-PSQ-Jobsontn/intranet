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
            $table->string('name')->unique();
            $table->string('initials', 10)->unique();
            $table->string('path')->unique();
            $table->string('email')->unique();
            $table->string('contact', 14);
            $table->integer('manager')->unsigned();
            $table->integer('substitute_manager')->unsigned();
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
        Schema::dropIfExists('departments');
    }
}
