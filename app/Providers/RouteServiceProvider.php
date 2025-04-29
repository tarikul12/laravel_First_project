<?php

namespace App\Providers;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Routing\Router;


use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //parent::boot();

        $this->app['router']->middlewareGroup('check1', [
            AgeCheck::class,
            CountryCheck::class,
            ]);
    }
}
