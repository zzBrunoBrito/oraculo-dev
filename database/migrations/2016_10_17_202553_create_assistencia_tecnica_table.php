<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistenciaTecnicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistencia_tecnica', function (Blueprint $table){
            $table->increments('id');
            $table->integer('contato_id')->unsigned()->nullable();
            $table->integer('equipamento_id');
            $table->string('nome');
            $table->foreign('contato_id')->references('id')->on('contato')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('equipamento_id')->references('id')->on('equipamento')
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
        Schema::drop('assistencia_tecnica');
    }
}
