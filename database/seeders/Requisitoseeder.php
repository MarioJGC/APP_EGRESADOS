<?php

namespace Database\Seeders;

use App\Models\Requisito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Requisitoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requisito = new Requisito();

        $requisito->nombre = '0001';
        $requisito->descripcion = 1;
        $requisito->estado = 3;
        $requisito->save();
    }
}
