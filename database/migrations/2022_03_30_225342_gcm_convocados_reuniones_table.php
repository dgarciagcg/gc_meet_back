<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class GcmConvocadosReunionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_convocados_reuniones', function (Blueprint $table) {
            $table->bigIncrements('id_convocado_reunion');
            $table->unsignedBigInteger('id_reunion');
            $table->foreign('id_reunion')->references('id_reunion')->on('gcm_reuniones');
            $table->string('tipo', 2)->index()->required();

            $table->unsignedBigInteger('sociedad')->nullable();
            $table->foreign('sociedad')->references('id_recurso')->on('gcm_recursos');

            $table->unsignedBigInteger('id_recurso');
            $table->foreign('id_recurso')->references('id_recurso')->on('gcm_recursos');

            $table->unsignedBigInteger('representacion')->nullable();
            $table->foreign('representacion')->references('id_convocado_reunion')->on('gcm_convocados_reuniones');

            $table->timestamp('fecha', $precision = 0)->required()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('poder', 255)->nullable();
            $table->decimal('participacion', $precision = 5, $scale = 2)->nullable();
            $table->string('estado', 2)->index()->required()->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_convocados_reuniones');
    }
}
