<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->integer('egresado_id')->primary();
            $table->string('nombre_egresado', 250);
            $table->string('grado_instruccion_egresado', 200);
            $table->string('especializacion_egresado', 200);
            $table->dateTime('fecha_egreso_egresado');
            $table->dateTime('fecha_titulo_egresado');
            $table->dateTime('fecha_maestria_egresado');
            $table->dateTime('fecha_doctorado_egresado');
            $table->integer('empresa_id');
            $table->string('cargo_empresa_egresado', 150);
            $table->string('tiempo_laboral_egresado', 30);
            
            $table->foreign('empresa_id', 'fk_egresados_empresas')->references('empresa_id')->on('empresas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresados');
    }
}
