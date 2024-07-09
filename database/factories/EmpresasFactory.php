<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Empresas;

class EmpresasFactory extends Factory
{
    protected $model = Empresas::class;
    public function definition(): array
    {
        return [
            'nombre_empresa' => $this->faker->company,
            'representante_empresa' => $this->faker->name($gender = 'male'|'female'),
            'celular_empresa' => $this->faker->e164PhoneNumber,
            "direccion_empresa" => $this->faker->url,
            "email_empresa" => $this->faker->email,
            "rubro_empresa" => $this->faker->randomElement($array = array ('Textil','Educacion','Fabricacion')),
        ];
    }
}
