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
            $table->id();

            $table->unsignedBigInteger('egresado_id')->unique();
            $table->foreign('egresado_id')->references('id')->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->unsignedBigInteger('tipo_cargo_id')->nullable();
            $table->foreign('tipo_cargo_id')->references('id')->on('tipo_cargos')
            ->onDelete('set null')
            ->onUpdate('cascade');


            $table->string('periodo_directiva', 15);
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
        Schema::dropIfExists('junta_directiva_egresados');
    }
}
