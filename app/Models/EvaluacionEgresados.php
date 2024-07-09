<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionEgresados extends Model
{
    use HasFactory;
    protected $table = "evaluacion_egresados";
    
    public function empresas() {
        return $this->belongsTo('App\Models\Empresas', 'empresa_id');
    }

    public function formatoTipoEvaluacion() {
        return $this->belongsTo('App\Models\FormatosTiposEvaluaciones', 'formato_tipo_evaluacion_id');
    }
}

