<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitosEgresados extends Model
{
    use HasFactory;
    protected $table = "requisitos_egresados";

    public function egresados() {
        return $this->belongsTo('App\Models\Egresados', 'egresado_id');
    }
}
