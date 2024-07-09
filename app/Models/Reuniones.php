<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniones extends Model
{
    use HasFactory;
    protected $table = "reuniones";

    public function egresados() {
        return $this->belongsTo('App\Models\Egresados', 'egresado_id');
    }

    public function actaEgresados() {
        return $this->hasOne('App\Models\ActaEgresados', 'reunion_id');
    }
}
