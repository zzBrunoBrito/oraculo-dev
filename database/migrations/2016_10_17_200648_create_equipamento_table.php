<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamento', function (Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id')->unsigned()->nullable();
            $table->string('nome');
            $table->string('num_patrimonio')->unique();
            $table->string('num_serie');
            $table->string('codigo');
            $table->string('grupo_executor');
            $table->string('modelo');
            $table->string('marca');
            $table->string('fabricante');
            $table->string('local_unidade')->nullable();
            $table->string('recursos');
            $table->date('data_instalacao');
            $table->string('num_pasta')->nullable();
            $table->string('tensao')->nullable();
            $table->string('potencia')->nullable();
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresa')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipamento');
    }
}
