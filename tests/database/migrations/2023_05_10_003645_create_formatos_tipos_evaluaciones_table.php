<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosTiposEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos_tipos_evaluaciones', function (Blueprint $table) {
            $table->integer('formato_tipo_evaluacion_id')->primary();
            $table->string('rubrica_evaluacion', 200);
            $table->decimal('resultado_evaluacion', 10, 0);
            $table->string('periodo_evaluacion', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formatos_tipos_evaluaciones');
    }
}
