<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabela Pivô - Usuário X Perfil
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });
        // Tabela Pivô - Perfil X Permissão
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
        });
        // Tabela Pivô - Usuário X Servidor
        Schema::create('employee_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });
        //Relações N:N - Usuário X Perfil
        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
        //Relações N:N - Perfil X Permissão
        Schema::table('permission_role', function (Blueprint $table) {
            $table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');
        });
        //Relações N:N - Usuário X Servidor
        Schema::table('employee_user', function (Blueprint $table) {
            $table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
        //Relações 1:N - Tabela de Setores
        Schema::table('departments', function (Blueprint $table) {
            $table->foreign('parent')->references('id')->on('departments')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('manager')->references('id')->on('employees')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('substitute_manager')->references('id')->on('employees')->onUpdate('cascade')->onDelete('restrict');
        });
        //Relações 1:N - Tabela de Servidores
        Schema::table('employees', function (Blueprint $table) {
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
        //Remover relacionamentos
        Schema::table('role_user', function (Blueprint $table){
            $table->dropForeign(['role_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::table('permission_role', function (Blueprint $table){
            $table->dropForeign(['permission_id']);
            $table->dropForeign(['role_id']);
        });
        Schema::table('departments', function (Blueprint $table) {
            $table->dropForeign(['parent']);
            $table->dropForeign(['manager']);
            $table->dropForeign(['substitute_manager']);
        });
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['person_id']);
            $table->dropForeign(['departament_id']);
        });
        //Apagar tabelas Pivô
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_role');
    }
}
