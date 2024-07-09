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
        Schema::create('acta_egresados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('reunion_id')->unique();
            $table->foreign('reunion_id')->references('id')->on('reuniones')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('junta_directiva_egresado_id')->nullable();
            $table->foreign('junta_directiva_egresado_id')->references('id')->on('junta_directiva_egresados')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('egresado_id')->unique();
            $table->foreign('egresado_id')->references('id')->on('egresados')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->string('resultado_acta_egresado', 255);
            $table->string('firma_responsable_acta_egresado', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acta_egresados');
    }
};
