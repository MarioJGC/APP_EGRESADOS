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
        Schema::create('plan_trabajos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cronograma_egresado_id')->unique();
            $table->foreign('cronograma_egresado_id')->references('id')->on('cronograma_egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('evaluacion_trabajos_id')->unique();
            $table->foreign('evaluacion_trabajos_id')->references('id')->on('evaluacion_trabajos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('egresado_id')->unique();
            $table->foreign('egresado_id')->references('id')->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->string('informe_plan_trabajo', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_trabajos');
    }
};
