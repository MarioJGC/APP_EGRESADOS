<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuntaDirectaEgresados extends Model
{
    use HasFactory;
    protected $table = "junta_directiva_egresados";

    public function actaEgresados() {
        return $this->hasMany('App\Models\ActaEgresados', 'junta_directiva_egresado_id');
    }

    public function tipoCargos() {
        return $this->belongsTo('App\Models\TipoCargos', 'tipo_cargo_id');
    }

    public function egresados() {
        return $this->belongsTo('App\Models\Egresados', 'egresado_id');
    }


}
