<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GcmArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_archivos', function (Blueprint $table) {
            $table->bigIncrements('id_archivo');
            $table->unsignedBigInteger('id_reunion')->nullable();
            $table->foreign('id_reunion')->references('id_reunion')->on('gcm_reuniones');
            $table->unsignedBigInteger('id_programa')->nullable();
            $table->foreign('id_programa')->references('id_programa')->on('gcm_programacion');
            $table->string('descripcion', 200)->required();
            $table->integer('peso')->required();
            $table->string('url', 255)->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gcm_archivos');
    }
}
