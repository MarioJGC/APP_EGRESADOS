<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reuniones;

class ReunionesFactory extends Factory
{
    protected $model = Reuniones::class;
    public function definition(): array
    {
        return [
            'egresado_id' => $this->faker->numberBetween(0,20),
            'fecha_reunion' => $this->faker->dateTime($max = 'now', $timezone = null),
            'lugar_reunion' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'agenda_reunion' => $this->faker->url,
            'objetivo_reunion' => $this->faker->url,
        ];
    }
}
