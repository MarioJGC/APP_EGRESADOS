<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PlanTrabajos;

class PlanTrabajosFactory extends Factory
{
    protected $model = PlanTrabajos::class;
    public function definition(): array
    {
        return [
            'cronograma_egresado_id' => $this->faker->numberBetween(0,20),
            'evaluacion_trabajos_id' => $this->faker->numberBetween(0,20),
            'egresado_id' => $this->faker->numberBetween(0,20),
            'informe_plan_trabajo' => $this->faker->url,
        ];
    }
}
