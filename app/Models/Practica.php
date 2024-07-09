<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Practica extends Model
{
    use HasFactory;
    protected function titulo(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

}
