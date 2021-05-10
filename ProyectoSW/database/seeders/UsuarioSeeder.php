<?php

namespace Database\Seeders;

use App\Models\usuario;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $usuario = [
            [1,'admin'],
            [2,'user']
        ];
        $usuario = array_map(function ($usuario) use ($now){
            return[
                'id_user' => $usuario[0],
                'tipo_usuario' => $usuario[1],
            ];
    
        },$usuario);
    
        \DB::table('usuarios')->insert($usuario);
    }
}