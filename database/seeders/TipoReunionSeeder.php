<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoReunionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gcm_tipo_reuniones')->insert([
            'id_grupo' => 1,
            'id_equipo' => 1,
            'descripcion' => 'ASAMBLEA GENERAL ORDINARIA DE ACCIONISTAS',
            'ruta_acta' => 'asamblea-general-accionistas',
            'quorum' => '1',
            'estado' => '1',
        ]);

        DB::table('gcm_tipo_reuniones')->insert([
            'id_grupo' => 4,
            'id_equipo' => 1,
            'descripcion' => 'ASAMBLEA GENERAL DE ASOCIADOS',
            'ruta_acta' => 'asamblea-general-asociados',
            'quorum' => '1',
            'estado' => '1',
        ]);
    }
}
