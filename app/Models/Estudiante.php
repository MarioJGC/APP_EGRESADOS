<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Estudiante extends Model
{
    use HasFactory;
    protected function nombre(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function apellidop(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
    protected function apellidom(): Attribute
    {   
        return new Attribute(   
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
}
