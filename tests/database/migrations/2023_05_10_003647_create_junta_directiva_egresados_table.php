<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuntaDirectivaEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junta_directiva_egresados', function (Blueprint $table) {
            $table->integer('junta_directiva_egresado_id')->primary();
            $table->integer('egresado_id');
            $table->integer('tipo_cargo_id');
            $table->string('periodo_directiva', 15);
            
            $table->foreign('egresado_id', 'fk_junta_directiva_egresados_egresados1')->references('egresado_id')->on('egresados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('tipo_cargo_id', 'fk_junta_directiva_egresados_tipo_cargos1')->references('tipo_cargo_id')->on('tipo_cargos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junta_directiva_egresados');
    }
}
