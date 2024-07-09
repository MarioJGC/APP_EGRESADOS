<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstNameMale,
            'apellidop' => $this->faker->lastName,
            'apellidom' => $this->faker->lastName,
            'telefono' => $this->faker->numberBetween(900000000,999999999),
            'correo' => $this->faker->email,
        ];
    }
}
