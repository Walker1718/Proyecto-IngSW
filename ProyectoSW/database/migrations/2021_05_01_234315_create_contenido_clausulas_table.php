<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoClausulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_clausulas', function (Blueprint $table) {
            $table->bigInteger('id_contrato')->unsigned();
            $table->foreign('id_contrato')->references('id_contrato')->on('contratos');
            $table->bigInteger('id_clausula')->unsigned();
            $table->foreign('id_clausula')->references('id_clausula')->on('clausulas');
            $table->String('datos');
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
        Schema::dropIfExists('contenido_clausulas');
    }
}
