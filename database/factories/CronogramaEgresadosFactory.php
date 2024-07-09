<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CronogramaEgresados;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CronogramaEgresados>
 */
class CronogramaEgresadosFactory extends Factory
{
    protected $model = CronogramaEgresados::class;
    public function definition(): array
    {
        return [
            'numero_cronograma' => $this->faker->numberBetween(1,60),
            'actividad_cronograma' => $this->faker->url,
            'fecha_cronograma' => $this->faker->dateTime($max = 'now', $timezone = null),
            "periodo_cronograma" => $this->faker->randomElement($array = array ('2020-I','2020-II','20201-I',
            '2021-II','2022-I','20202-II'))
        ];
    }
}
