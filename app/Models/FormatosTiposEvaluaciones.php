<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatosTiposEvaluaciones extends Model
{
    use HasFactory;
    protected $table = "formatos_tipos_evaluaciones";

    public function evaluacionEgresados(){
        return $this->hasMany('App\Models\EvaluacionEgresados','formato_tipo_evaluacion_id');
    }

}
