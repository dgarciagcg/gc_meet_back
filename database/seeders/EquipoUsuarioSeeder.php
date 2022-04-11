<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gcm_equipos_usuarios')->insert([
            'id_equipo' => 1,
            'id_usuario' => 'gcmeet',
        ]);
    }
}
