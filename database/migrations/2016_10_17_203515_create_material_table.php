<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table){
            $table->increments('id');
            $table->integer('equipamento_id')->unsigned();
            $table->string('nome');
            $table->string('codigo');
            $table->integer('quantidade');
            $table->timestamps();
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
        Schema::drop('material');
    }
}
