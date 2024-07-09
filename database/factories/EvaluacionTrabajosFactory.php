<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EvaluacionTrabajos;
class EvaluacionTrabajosFactory extends Factory
{
    protected $model = EvaluacionTrabajos::class;
    public function definition(): array
    {
        return [
            'descripcion_evaluacion_trabajo' => $this->faker->url,
            'porcentaje_avance_evaluacion_trabajo' => $this->faker->numberBetween(1,99),
        ];
    }
}
