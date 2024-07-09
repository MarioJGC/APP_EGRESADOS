<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluacionEgresados;
use App\Models\Empresa;
use App\Models\FormatosTipoEvaluacion;
use \App\Models\Empresas;
use \App\Models\FormatosTiposEvaluaciones;

class EvaluacionEgresadosFactory extends Factory
{
    protected $model = EvaluacionEgresados::class;
    public function definition(): array
    {
        return [
            'empresa_id' => $this->faker->randomElement(\App\Models\Empresas::pluck('id')->toArray()),
            'formato_tipo_evaluacion_id' => $this->faker->randomElement(\App\Models\FormatosTiposEvaluaciones::pluck('id')->toArray()),
        ];
    }
}
 