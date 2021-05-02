<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id('id_perfil');
            $table->char('procesador', 30);
            $table->char('ram', 30);
            $table->char('hdd', 30);
            $table->char('dvd', 30);
            $table->char('tarjeta_sonido', 30);
            $table->char('tarjeta_grafica', 30);
            $table->char('tarjeta_red', 30);
            $table->char('teclado', 30);
            $table->char('monitor', 30);
            $table->char('gabinete', 30);
            $table->char('mouse', 30);
            $table->char('fuente_poder', 30);
            $table->char('velocidad_hd', 30);
            $table->boolean('bajo_impacto_acustico');
            $table->char('campo', 30);
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
        Schema::dropIfExists('perfils');
    }
}
