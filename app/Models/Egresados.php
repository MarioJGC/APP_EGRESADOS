<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Egresados extends Model
{
    use HasFactory;
    protected $table = "egresados";

    //metodo para relacion de 1 a 1
    public function juntaDirectivaEgresados() {
        return $this->hasOne('App\Models\JuntaDirectaEgresados', 'egresado_id');
    }

    public function actaEgresados() {
        return $this->hasOne('App\Models\ActaEgresados', 'egresado_id');
    }

    public function reuniones() {
        return $this->hasMany('App\Models\Reuniones', 'egresado_id');
    }

    
    public function planTrabajo() {
        return $this->hasOne('App\Models\PlanTrabajos', 'egresado_id');
    }

    public function requisitosEgresados(){
        return $this->hasMany('App\Models\RequisitosEgresados','egresado_id');
    }

    public function empresas() {
        return $this->belongsTo('App\Models\Empresas', 'empresa_id');
    }

}
