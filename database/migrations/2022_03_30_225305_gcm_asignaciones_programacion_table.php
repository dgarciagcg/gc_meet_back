<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GcmAsignacionesProgramacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_asignaciones_programacion', function (Blueprint $table) {
            $table->bigIncrements('id_asignacion_programa');
            $table->unsignedBigInteger('id_programa')->nullable();
            $table->foreign('id_programa')->references('id_programa')->on('gcm_programacion');
            $table->unsignedBigInteger('id_recurso')->nullable();
            $table->foreign('id_recurso')->references('id_recurso')->on('gcm_recursos');
            $table->string('tipo', 2)->index()->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_asignaciones_programacion');
    }
}
