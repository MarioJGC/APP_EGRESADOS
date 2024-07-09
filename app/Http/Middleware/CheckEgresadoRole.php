<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckEgresadoRole
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('egresado')) {
            return $next($request);
        }

        return abort(403, 'Acceso no autorizado.');
    }
}
