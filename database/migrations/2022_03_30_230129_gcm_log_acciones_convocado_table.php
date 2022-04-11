<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class GcmLogAccionesConvocadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_log_acciones_convocado', function (Blueprint $table) {
            $table->bigIncrements('id_log_accion');
            $table->unsignedBigInteger('id_convocado_reunion');
            $table->foreign('id_convocado_reunion')->references('id_convocado_reunion')->on('gcm_convocados_reuniones');
            $table->string('accion', 3)->index()->required();
            $table->string('tabla', 100)->index()->required();
            $table->timestamp('fecha', $precision = 0)->required()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('lugar', 100)->required();
            $table->longText('detalle')->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_log_acciones_convocado');
    }
}
