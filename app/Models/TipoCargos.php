<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCargos extends Model
{
    use HasFactory;
    protected $table = "tipo_cargos";

    public function juntaDirectiva() {
        return $this->hasMany('App\Models\JuntaDirectaEgresados', 'tipo_cargo_id');
    }
}
