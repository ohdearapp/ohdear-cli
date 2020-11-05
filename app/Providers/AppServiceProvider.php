<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use OhDear\PhpSdk\OhDear;
use RuntimeException;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton(OhDear::class, function () {
            if (! $apiToken = config('settings.ohdear_api_token')) {
                throw new RuntimeException('Oh Dear API key not set');
            }

            return new OhDear($apiToken);
        });
    }

    public function register(): void
    {
        //
    }
}
