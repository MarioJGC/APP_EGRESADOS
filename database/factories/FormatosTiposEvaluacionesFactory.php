<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FormatosTiposEvaluaciones;

class FormatosTiposEvaluacionesFactory extends Factory
{
    protected $model = FormatosTiposEvaluaciones::class;
    public function definition(): array
    {
        return [
            'rubrica_evaluacion' => $this->faker->url,
            'resultado_evaluacion' => $this->faker->numberBetween(1,20),
            "periodo_evaluacion" => $this->faker->randomElement($array = array ('2020-I','2020-II','20201-I',
            '2021-II','2022-I','20202-II'))
        ];
    }
}
