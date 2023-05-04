<?php

namespace App\Http\Middleware;
use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (auth()->user()->role != $role) {
            return redirect('/');
        }

        return $next($request);
    }
}