<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musica',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_artista');
            $table->integer('id_status_projeto');
            $table->integer('id_status_pagamento');
            $table->integer('id_tipo_pagamento');
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('valor',10,2);
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
