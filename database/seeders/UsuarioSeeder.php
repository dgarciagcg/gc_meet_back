<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gcm_usuarios')->insert([
            'id_usuario' => 'gcmeet',
            'nombre' => 'GCmeet',
            'correo' => null,
            'contrasena' => null,
            'estado' => 1,
        ]);
    }
}
