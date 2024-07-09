<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos_egresados', function (Blueprint $table) {
            $table->id();
            
            $table->integer('estado_estudiante_id');
            $table->string('solicitud_decano_egresado', 200);
            $table->string('recibo_dt_egresado', 200);
            $table->string('certificado_egresado');
            $table->string('fotografia_egresado');
            $table->string('certificado_ofimatica_egresado');


            $table->unsignedBigInteger('egresado_id')->nullable();
            $table->foreign('egresado_id')->references('id')->on('egresados')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
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
        Schema::dropIfExists('requisitos_egresados');
    }
}
