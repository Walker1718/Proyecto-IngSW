<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbarcaPerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abarca_perfiles', function (Blueprint $table) {
            $table->bigInteger('id_contrato')->unsigned();
            $table->foreign('id_contrato')->references('id_contrato')->on('contratos');
            $table->bigInteger('id_perfil')->unsigned();
            $table->foreign('id_perfil')->references('id_perfil')->on('perfils');
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
        Schema::dropIfExists('abarca_perfiles');
    }
}
