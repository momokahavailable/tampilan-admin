<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/admin'; // <- arahkan ke admin

    public function boot(): void
    {
        //
    }
}
