<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JuntaDirectaEgresados;

class JuntaDirectaEgresadosFactory extends Factory
{
    protected $model = JuntaDirectaEgresados::class;
    public function definition(): array
    {
        return [
            'egresado_id' => $this->faker->numberBetween(0,20),
            'tipo_cargo_id' => $this->faker->numberBetween(0,20),
            'periodo_directiva' => $this->faker->randomElement($array = array ('2020-I','2020-II','20201-I',
            '2021-II','2022-I','20202-II'))
        ];
    }
}
