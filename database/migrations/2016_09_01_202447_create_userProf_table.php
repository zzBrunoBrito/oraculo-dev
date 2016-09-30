<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('nivel')->default(4);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('endereco', function(Blueprint $table){
            $table->increments('id');
            $table->string('pais');
            $table->string('estado');
            $table->string('cidade');
            $table->string('rua');
            $table->string('numero');
            $table->string('cep');
            $table->string('complemento')->nullable();

        });

        Schema::create('profissional', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('id')->on('empresa')->onDelete('cascade');
            $table->string('name');
            $table->string('cargo');
            $table->date('dtNasc');
            $table->integer('end_id')->unsigned();
            $table->foreign('end_id')->references('id')->on('endereco')->onDelete('cascade');
            $table->string('telefone');
            $table->integer('status');
            $table->dropForeign(['id']);
            $table->dropForeign(['end_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('profissional');
        Schema::drop('endereco');
    }
}
