<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etapa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etapa>
 */
class EtapaFactory extends Factory
{
    protected $model = Etapa::class;
    public function definition(): array
    {
        return [
            //forma de crear un numero aleatorio entre dos valores
            'nombre' => $this->faker->company,
            'descripcion' => $this->faker->text,

        ];
    }
}
