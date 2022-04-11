<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gcm_grupos')->insert([
            'descripcion' => 'Garantías Comunitarias Colombia',
            'logo' => '',
            'estado' => 1,
        ]);

        DB::table('gcm_grupos')->insert([
            'descripcion' => 'Garantías Comunitarias Panamá',
            'logo' => '',
            'estado' => 1,
        ]);

        DB::table('gcm_grupos')->insert([
            'descripcion' => 'GCBloomRisk',
            'logo' => '',
            'estado' => 1,
        ]);

        DB::table('gcm_grupos')->insert([
            'descripcion' => 'GCMutual',
            'logo' => '',
            'estado' => 1,
        ]);
    }
}
