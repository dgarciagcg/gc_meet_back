<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GcmAsistenciaReunionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_asistencia_reuniones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_convocado_reunion')->primary();
            $table->foreign('id_convocado_reunion')->references('id_convocado_reunion')->on('gcm_convocados_reuniones');
            $table->dateTime('fecha_ingreso')->required();
            $table->dateTime('fecha_salida')->nullable();
            $table->string('estado', 1)->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_asistencia_reuniones');
    }
}
