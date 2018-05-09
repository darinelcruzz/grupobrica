<?php

namespace App\Http\Middleware;

use Closure;

class Runa
{
    public function handle($request, Closure $next)
    {
        if ($request->user()->company == 'runa' || $request->user()->company == 'owner') {
            return $next($request);
        }

        return back();
    }
}
