<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TipoCargos;

class TipoCargosFactory extends Factory
{
    protected $model = TipoCargos::class;
    public function definition(): array
    {
        return [
            "decripcion_cargo" => $this->faker->randomElement($array = array ('presidente','secretario','vocal1',
            'vocal2'))
        ];
    }
}
