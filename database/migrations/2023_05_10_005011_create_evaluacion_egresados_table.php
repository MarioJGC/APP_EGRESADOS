<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluacion_egresados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formato_tipo_evaluacion_id');
            $table->foreign('formato_tipo_evaluacion_id')
            ->references('id')
            ->on('formatos_tipos_evaluaciones')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')->references('id')
            ->on('empresas')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluacion_egresados');
    }
};
