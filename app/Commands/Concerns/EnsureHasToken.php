<?php

namespace App\Commands\Concerns;

trait EnsureHasToken
{
    protected function hasToken(): bool
    {
        return config('settings.ohdear_api_token') !== null && config('settings.ohdear_api_token') !== '';
    }

    protected function ensureHasToken(): bool
    {
        if (! $this->hasToken()) {
            $this->error('You have not configured your Oh Dear API token yet. Please set the `OHDEAR_API_TOKEN` environment variable first.');

            return false;
        }

        return true;
    }
}
