<?php

namespace Database\Factories;

use App\Models\Practica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practica>
 */
class PracticaFactory extends Factory
{
    protected $model = Practica::class;
    public function definition(): array
    {
        return [
            //forma de crear un valor unico de numero aleatorio de 1 al limite de enteros
            'codigo' => $this->faker->unique()->randomNumber(),
            //forma de crear un numero aleatorio entre dos valores
            'idestudiante' => $this->faker->numberBetween(1,100),
            'iddocente' => $this->faker->numberBetween(1,20),
            'idempresa' => $this->faker->numberBetween(1,50),
            'idetapa' => $this->faker->numberBetween(1,3),
            //forma de crear una oracion
            'titulo' => $this->faker->sentence()
        ];
        /* OTRAS FORMAS 
            $this->faker->paragraph()  //rellenar un parrafo
            $this->faker->randomElment('Desarrollo Web','Diseño Web') //rellenar entre dos valores
        */
    }
}
