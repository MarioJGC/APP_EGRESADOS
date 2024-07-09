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
        Schema::create('evaluacion_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_evaluacion_trabajo', 300);
            $table->decimal('porcentaje_avance_evaluacion_trabajo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_trabajos');
    }
};
