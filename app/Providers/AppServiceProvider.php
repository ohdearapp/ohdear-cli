<?php

namespace App\Providers;

use App\Services\CredentialStore;
use App\Services\OhDearDescriber;
use Illuminate\Console\Command;
use Illuminate\Http\Client\Response;
use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelConsoleSummary\Contracts\DescriberContract;
use Spatie\OpenApiCli\OpenApiCli;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton(DescriberContract::class, OhDearDescriber::class);

        OpenApiCli::register(specPath: 'https://ohdear.app/api-docs/ohdear-openapi.yml')
            ->useOperationIds()
            ->cache(ttl: 60 * 60 * 24)
            ->auth(fn () => app(CredentialStore::class)->getToken())
            ->onError(function (Response $response, Command $command) {
                if ($response->status() === 401) {
                    $command->error(
                        'Your API token is invalid or expired. Run `ohdear login` to authenticate.',
                    );

                    return true;
                }

                return false;
            });
    }

    public function register(): void
    {
        $this->app->singleton(CredentialStore::class);
    }
}
