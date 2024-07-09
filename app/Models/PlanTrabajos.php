<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTrabajos extends Model
{
    use HasFactory;
    protected $table = "plan_trabajos";

    public function egresados() {
        return $this->belongsTo('App\Models\Egresados', 'egresado_id');
    }

    public function evaluacionTrabajos() {
        return $this->belongsTo('App\Models\EvaluacionTrabajos', 'evaluacion_trabajos_id');
    }

    public function cronogramaEgresados() {
        return $this->belongsTo('App\Models\CronogramaEgresados', 'cronograma_egresado_id');
    }

}
