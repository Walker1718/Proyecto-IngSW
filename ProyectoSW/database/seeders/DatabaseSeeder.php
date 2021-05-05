<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->insertarPerfil();
        
    }

    // public function insertarPerfil(): void
    // {
    //     $now = now();
    //     $perfils = [
    //         ['Perfil ofimatica','Intel Celeron','1x4gb ddr3 kingston','dvd-rw123','Integrada Realtek','Intel HD graphics','Tp-link wifi','Teclado Genius','Gabinete ATX Clio','Mouse Genius','Spektra 250w','128GB WD',true,25000],
    //         ['Perfil Arquitectura','Intel i7-7700k','2x8gb ddr4 kingston','','HDaudio','Nvidia GTX 1050TI','Killer','HyperX fps Alloy','Sentey RGB','Logitech G502','EVGA 650W','2x256GB Kingston',false,150000],
    //     ];
    //     $perfils = array_map(function ($perfil) use ($now){
    //         return[
    //             'Nombre_perfil' => $perfil[0],
    //             'Tipo_procesador' => $perfil[1],
    //             'Ram' => $perfil[2],
    //             'Lector_dvd' => $perfil[3],
    //             'Tarjeta_sonido' => $perfil[4],
    //             'Tarjeta_video' => $perfil[5],
    //             'Tarjeta_red' => $perfil[6],
    //             'Teclado' => $perfil[7],
    //             'Gabinete' => $perfil[8],
    //             'Mouse' => $perfil[9],
    //             'Fuente_de_poder' => $perfil[10],
    //             'SSD' => $perfil[11],
    //             'Bajo_impacto_acustico' => $perfil[12],
    //             'Valor_perfil' => $perfil[13],
    //         ];

    //     },$perfils);

    //     \DB::table('perfils')->insert($perfils);
    // }
}
