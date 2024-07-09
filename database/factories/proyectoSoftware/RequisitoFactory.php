<?php

namespace Database\Factories;

use App\Models\Requisito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requisito>
 */
class RequisitoFactory extends Factory
{
    protected $model = Requisito::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            //forma de crear un numero aleatorio entre dos valores
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->numberBetween(0,1),
        ];
    }
}
