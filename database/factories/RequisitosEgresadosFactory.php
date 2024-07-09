<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RequisitosEgresados;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequisitosEgresados>
 */
class RequisitosEgresadosFactory extends Factory
{
    protected $model = RequisitosEgresados::class;
    public function definition(): array
    {
        return [
            'egresado_id' => $this->faker->numberBetween(0,20),
            'estado_estudiante_id' => $this->faker->numberBetween(0,20),
            'solicitud_decano_egresado' => $this->faker->url,
            'recibo_dt_egresado' => $this->faker->url,
            'certificado_egresado' => $this->faker->url,
            'fotografia_egresado' => $this->faker->url,
            'certificado_ofimatica_egresado' => $this->faker->url,
        ];
    }
}
