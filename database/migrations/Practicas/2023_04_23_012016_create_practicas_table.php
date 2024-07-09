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
        Schema::create('practicas', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');
            //$table->integer('idestudiante');
            $table->integer('iddocente');
            $table->integer('idempresa');
            $table->integer('idetapa');
            $table->string('titulo');

            $table->unsignedBigInteger('idestudiante')->unique()->nullable();
            $table->foreign('idestudiante')
            ->references('id')
            ->on('estudiantes')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas');
    }
};
