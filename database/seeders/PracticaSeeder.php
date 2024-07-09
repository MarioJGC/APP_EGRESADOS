<?php

namespace Database\Seeders;

use App\Models\Practica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $practica = new Practica();

        $practica->codigo = '0001';
        $practica->idestudiante = 1;
        $practica->iddocente = 3;
        $practica->idempresa = 4;
        $practica->idetapa = 1;
        $practica->titulo = 'Implementacion web con ISO 9001 para la gestion de calidad de la Universidad Continental';

        $practica->save();
    }
}
