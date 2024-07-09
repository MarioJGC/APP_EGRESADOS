<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionTrabajos extends Model
{
    use HasFactory;
    protected $table = "evaluacion_trabajos";

    public function planTrabajo() {
        return $this->hasOne('App\Models\PlanTrabajos', 'evaluacion_trabajos_id');
    }
}
