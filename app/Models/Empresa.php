<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Empresa extends Model
{
    use HasFactory;
    protected function nombre(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function encargado(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function rubro(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function direccion(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
}
