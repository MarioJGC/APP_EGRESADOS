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
            $table->id();
            $table->string('nombre_egresado', 250);
            $table->string('grado_instruccion_egresado', 200);
            $table->string('especializacion_egresado', 200);

            $table->integer('edad_al_egresar');
            $table->integer('publicaciones_academicas');
            $table->integer('puntaje_certificacion');
            $table->integer('num_idiomas_hablados');

            $table->integer('proyectos_investigacion');
            $table->integer('habilidades_certificadas');
            $table->integer('sueldo_actual');
            
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->string('cargo_empresa_egresado', 150);
            $table->integer('tiempo_laboral_egresado', 2);

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
        Schema::dropIfExists('egresados');
    }
}
