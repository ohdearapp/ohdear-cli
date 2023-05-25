<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use OhDear\PhpSdk\Exceptions\UnauthorizedException;
use function Termwind\render;
use Throwable;

class Handler extends ExceptionHandler
{
    public function renderForConsole($output, Throwable $e): void
    {
        if ($e instanceof UnauthorizedException) {
            render(view('unauthorised')->render());

            return;
        }

        parent::renderForConsole($output, $e);
    }
}
