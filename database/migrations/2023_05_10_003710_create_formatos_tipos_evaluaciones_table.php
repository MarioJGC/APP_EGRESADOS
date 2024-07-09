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
            $table->id();
            $table->string('rubrica_evaluacion', 200);
            $table->integer('resultado_evaluacion');
            $table->string('periodo_evaluacion', 8);

            $table->timestamps();
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
