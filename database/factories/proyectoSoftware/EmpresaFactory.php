<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(1,false),
            'encargado' => $this->faker->firstNameMale,
            'rubro' => $this->faker->sentence(1,false),
            'direccion' => $this->faker->sentence(1,false),
            'telefono' => $this->faker->numberBetween(900000000,999999999),
        ];
    }
}
