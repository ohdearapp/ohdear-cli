<?php

namespace App\Commands\Concerns;

use function Termwind\render;

trait EnsureHasToken
{
    protected function hasToken(): bool
    {
        return config('settings.ohdear_api_token') !== null && config('settings.ohdear_api_token') !== '';
    }

    protected function ensureHasToken(): bool
    {
        if (! $this->hasToken()) {
            render(view('unauthorised'));

            return false;
        }

        return true;
    }
}
