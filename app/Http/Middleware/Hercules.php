<?php

namespace App\Http\Middleware;

use Closure;

class Hercules
{
    public function handle($request, Closure $next)
    {
        if ($request->user()->company == 'hercules' || $request->user()->company == 'owner') {
            return $next($request);
        }

        return back();
    }
}
