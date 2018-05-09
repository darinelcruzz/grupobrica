<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();

        $this->mapPublicRoutes();
        
        $this->mapRunaRoutes();

        $this->mapHerculesRoutes();
    }

    protected function mapPublicRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/public.php'));
    }

    protected function mapRunaRoutes()
    {
        Route::middleware(['web', 'auth', 'runa'])
             ->namespace($this->namespace)
             ->group(base_path('routes/runa.php'));
    }

    protected function mapHerculesRoutes()
    {
        Route::middleware(['web', 'auth', 'hercules'])
             ->namespace($this->namespace)
             ->group(base_path('routes/hercules.php'));
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
