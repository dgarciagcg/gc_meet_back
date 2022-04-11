<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class GcmConvocatoriaReunionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_convocatoria_reuniones', function (Blueprint $table) {
            $table->bigIncrements('id_convocatoria_reunion');

            $table->unsignedBigInteger('id_convocado_reunion');
            $table->foreign('id_convocado_reunion')->references('id_convocado_reunion')->on('gcm_convocados_reuniones');

            $table->string('id_usuario', 20);
            $table->foreign('id_usuario')->references('id_usuario')->on('gcm_usuarios');

            $table->timestamp('fecha', $precision = 0)->required()->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_convocatoria_reuniones');
    }
}
