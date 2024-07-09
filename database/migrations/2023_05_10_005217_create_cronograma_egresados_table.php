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
        Schema::create('cronograma_egresados', function (Blueprint $table) {
            $table->id();

            $table->string('numero_cronograma', 10);

            $table->string('actividad_cronograma', 250);

            $table->dateTime('fecha_cronograma');

            $table->string('periodo_cronograma', 15);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma_egresados');
    }
};
