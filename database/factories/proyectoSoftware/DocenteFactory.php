<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    protected $model = Docente::class;
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->randomNumber(),
            //forma de crear un numero aleatorio entre dos valores
            'nombre' => $this->faker->firstNameMale,
            'apellidop' => $this->faker->lastName,
            'apellidom' => $this->faker->lastName,
            'telefono' => $this->faker->numberBetween(900000000,999999999),
            'correo' => $this->faker->email,
        ];
    }
}
