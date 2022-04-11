<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GcmEquiposUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_equipos_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('gcm_equipos');
            $table->string('id_usuario', 20);
            $table->foreign('id_usuario')->references('id_usuario')->on('gcm_usuarios');
            $table->primary(['id_equipo', 'id_usuario'], 'id_equipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_equipos_usuarios');
    }
}
