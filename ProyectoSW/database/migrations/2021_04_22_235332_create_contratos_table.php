<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('id_contrato');
            $table->id('id_user');
            $table->id('id_perfil');
            $table->id('id_proveedor');
            $table->char('tipo_contrato', 15);
            $table->char('descripcion', 15);
            $table->char('estado', 15);
            $table->date('fecha_entrega');
            $table->date('fecha_aceptacion');
            $table->date('fecha_vencimiento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
