<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Egresados;
class EgresadosFactory extends Factory
{
    protected $model = Egresados::class;
    public function definition(): array
    {
        return [
            'nombre_egresado' => $this->faker->name($gender = 'male'|'female') ,
            'grado_instruccion_egresado' => $this->faker->randomElement($array = array ('Doctorado','Bachller','Licenciado','Magister','Master')),
            'especializacion_egresado' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            "fecha_egreso_egresado" => $this->faker->dateTime($max = 'now', $timezone = null),
            'fecha_titulo_egresado' => $this->faker->dateTime($max = 'now', $timezone = null),
            'fecha_maestria_egresado' => $this->faker->dateTime($max = 'now', $timezone = null),
            'fecha_doctorado_egresado' => $this->faker->dateTime($max = 'now', $timezone = null),
            'empresa_id' => $this->faker->numberBetween(1,60),
            'cargo_empresa_egresado' => $this->faker->jobTitle,
            'tiempo_laboral_egresado' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
        ];
    }
}
