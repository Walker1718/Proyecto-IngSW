<?php

namespace Database\Seeders;

use App\Models\clausula;

use Illuminate\Database\Seeder;

class ClausulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $clausulas = [
            [1,'1','Pri','La empresa Opciones S.A. Sistema de Información, se adjudicó la Licitación Pública para la contratación del suministro denominado "Arriendo de Computadores Desktops para la Universidad del Sur", según da cuenta el Decreto Universitario...... '],
            [2,'2','Seg','Por']
        ];
        $clausulas = array_map(function ($clausula) use ($now){
            return[
                'id_clausula' => $clausula[0],
                'n_clausula' => $clausula[1],
                'titulo' => $clausula[2],
                'Contenido' => $clausula[3],
            ];
    
        },$clausulas);
    
        \DB::table('clausulas')->insert($clausulas);
    }
}