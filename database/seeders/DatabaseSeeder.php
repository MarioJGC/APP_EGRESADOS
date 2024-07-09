<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Practica;
use App\Models\Requisito;
use App\Models\User;
use App\Models\Docente;
use App\Models\Empresa;
use App\Models\Estudiante;
use App\Models\Etapa;
use App\Models\ActaEgresados;
use App\Models\CronogramaEgresados;
use App\Models\Egresados;
use App\Models\Empresas;
use App\Models\EvaluacionEgresados;
use App\Models\EvaluacionTrabajos;
use App\Models\FormatosTiposEvaluaciones;
use App\Models\JuntaDirectaEgresados;
use App\Models\PlanTrabajos;
use App\Models\RequisitosEgresados;
use App\Models\Reuniones;
use App\Models\TipoCargos;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        User::factory(10)->create();

        FormatosTiposEvaluaciones::factory(10)->create();
        Empresas::factory(10)->create();
        EvaluacionEgresados::factory(10)->create();
        CronogramaEgresados::factory(10)->create();
        EvaluacionTrabajos::factory(10)->create();
        Egresados::factory(10)->create();
        PlanTrabajos::factory(10)->create();
        RequisitosEgresados::factory(10)->create();
        TipoCargos::factory(10)->create();
        Reuniones::factory(10)->create();
        JuntaDirectaEgresados::factory(10)->create();
        ActaEgresados::factory(10)->create();

        
        //Practica::factory(50)->create();
        //Requisito::factory(10)->create();
        //Docente::factory(10)->create();
        //Empresa::factory(10)->create();
        //Etapa::factory(10)->create();
        //Estudiante::factory(10)->create();
    }
}