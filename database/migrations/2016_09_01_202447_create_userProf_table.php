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
            $table->string('login')->unique();//é o cnpj da empresa
            $table->string('email') ->unique();
            $table->string('password');
            $table->integer('nivel');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('profissional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cargo');
            $table->date('dtNasc');
            $table->string('telefone');
            $table->integer('status');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
            $table->integer('profissional_id')->unsigned()->nullable();
            $table->foreign('profissional_id')->references('id')->on('profissional')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
