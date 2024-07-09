<?php

namespace App\Exports;

use App\Models\Egresados;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EgresadosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Egresados::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        // Definir los nombres de las columnas aquí
        return [
            'Id',
            'Nombre Completo',
            'Email',
            'Grado de instrucción',
            'Carrera',

            'Edad del egresado',
            'Publicaciones academicas',
            'Puntaje de certificacion',
            'Cantidad de idiomas',

            'Proyectos de Investgacion',
            'Habilidades certificadas',
            'Sueldo',


            'Id de empresa',
            'Cargo del egresado',
            'Tiempo laborando',
        ];
    }
}
