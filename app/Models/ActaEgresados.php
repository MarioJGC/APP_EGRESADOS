<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActaEgresados extends Model
{
    use HasFactory;
    protected $table = "acta_egresados";
    public function egresados() {
        return $this->belongsTo('App\Models\Egresados', 'egresado_id');
    }
    public function reuniones() {
        return $this->belongsTo('App\Models\Reuniones', 'reunion_id');
    }
    public function juntaDirectiva() {
        return $this->belongsTo('App\Models\JuntaDirectaEgresados', 'junta_directiva_egresado_id');
    }
}
