<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    protected $table = "empresas";

    //metodo para relacion de 1 a 1
    public function evaluacionEgresados() {
        return $this->hasOne('App\Models\EvaluacionEgresados', 'empresa_id');
    }

    public function egresados(){
        return $this->hasMany('App\Models\Egresados','empresa_id');
    }
}
