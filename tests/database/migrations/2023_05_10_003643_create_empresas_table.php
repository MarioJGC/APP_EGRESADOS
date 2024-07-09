<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->integer('empresa_id')->primary();
            $table->string('nombre_empresa', 200);
            $table->string('representante_empresa', 250);
            $table->string('celular_empresa', 15);
            $table->string('direccion_empresa', 300);
            $table->string('email_empresa', 250);
            $table->string('rubro_empresa', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
