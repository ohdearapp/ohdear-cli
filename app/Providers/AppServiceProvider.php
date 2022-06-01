<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use OhDear\PhpSdk\OhDear;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton(OhDear::class, function () {
            return new OhDear(config('settings.ohdear_api_token') ?? '');
        });
    }

    public function register(): void
    {
        //
    }
}
