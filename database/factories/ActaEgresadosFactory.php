<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ActaEgresados;

class ActaEgresadosFactory extends Factory
{
    protected $model = ActaEgresados::class;
    public function definition(): array
    {
        return [
            'reunion_id' => $this->faker->numberBetween(1,60),
            'junta_directiva_egresado_id' => $this->faker->numberBetween(1,60),
            'egresado_id' => $this->faker->numberBetween(1,60),
            "resultado_acta_egresado" => $this->faker->url,
            "firma_responsable_acta_egresado" => $this->faker->url
        ];
    }
}
