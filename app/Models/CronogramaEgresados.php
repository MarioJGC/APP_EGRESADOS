<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronogramaEgresados extends Model
{
    use HasFactory;
    protected $table = "cronograma_egresados";

        public function planTrabajo() {
            return $this->hasOne('App\Models\PlanTrabajos', 'cronograma_egresado_id');
        }
}
