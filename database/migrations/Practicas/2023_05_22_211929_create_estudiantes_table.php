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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('Codigo', 255)->change();
            $table->string('Nombre',255)->change();
            $table->string('Apellidop',255)->change();
            $table->string('Apellidom',255)->change();
            $table->string('Telefono',255)->change();
            $table->string('Correo',255)->change();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
