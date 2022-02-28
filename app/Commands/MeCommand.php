<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Team;
use function Termwind\render;

class MeCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'me';

    /** @var string */
    protected $description = 'Display information about the currently authenticated user';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('me', ['user' => $ohDear->me()]));
    }
}
