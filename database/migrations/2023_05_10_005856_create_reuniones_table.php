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
        Schema::create('reuniones', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_reunion');
            $table->string('lugar_reunion',100);
            $table->string('agenda_reunion', 255);
            $table->string('objetivo_reunion', 255);
            $table->unsignedBigInteger('egresado_id')->nullable();
            $table->foreign('egresado_id')->references('id')->on('egresados')
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
        Schema::dropIfExists('reuniones');
    }
};
