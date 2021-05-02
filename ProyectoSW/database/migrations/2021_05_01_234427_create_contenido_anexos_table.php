<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_anexos', function (Blueprint $table) {
            $table->bigInteger('id_anexo')->unsigned();
            $table->foreign('id_anexo')->references('id_anexo')->on('anexos');
            $table->bigInteger('id_clausula')->unsigned();
            $table->foreign('id_clausula')->references('id_clausula')->on('clausulas');
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
        Schema::dropIfExists('contenido_anexos');
    }
}
