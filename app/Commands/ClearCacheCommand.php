<?php

namespace App\Commands;

use Illuminate\Support\Facades\Cache;
use LaravelZero\Framework\Commands\Command;
use Spatie\OpenApiCli\OpenApiCli;
use Spatie\OpenApiCli\SpecResolver;

class ClearCacheCommand extends Command
{
    protected $signature = 'clear-cache';

    protected $description = 'Clear the cached OpenAPI spec and temp files';

    public function handle(): int
    {
        $this->clearCachedSpecs();
        $this->cleanTempFiles();

        $this->info('Cache cleared successfully.');

        return self::SUCCESS;
    }

    protected function clearCachedSpecs(): void
    {
        foreach (OpenApiCli::getRegistrations() as $config) {
            if (! SpecResolver::isUrl($config->getSpecPath())) {
                continue;
            }

            $key = $config->getCachePrefix().md5($config->getSpecPath());

            Cache::store($config->getCacheStore())->forget($key);
        }
    }

    protected function cleanTempFiles(): void
    {
        $pattern = sys_get_temp_dir().'/openapi-cli-*.{yaml,yml,json}';

        foreach (glob($pattern, GLOB_BRACE) as $file) {
            @unlink($file);
        }
    }
}
