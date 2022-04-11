<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GcmTiposReunionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_tipos_reuniones', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_reunion');
            $table->unsignedBigInteger('id_grupo');
            $table->foreign('id_grupo')->references('id_grupo')->on('gcm_grupos');
            $table->unsignedBigInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('gcm_equipos');
            $table->string('descripcion', 255)->required();
            $table->string('ruta_acta', 100)->required();
            $table->string('quorum', 2)->index()->required();
            $table->string('estado', 2)->index()->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_tipos_reuniones');
    }
}
