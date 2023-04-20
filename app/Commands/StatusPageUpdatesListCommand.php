<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class StatusPageUpdatesListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-page-updates:list { status-page-id : The id of the status page }';

    /** @var string */
    protected $description = 'Display a list of status page updates';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('status-page-updates-list', ['statusPageUpdates' => $ohDear->statusPageUpdates($this->argument('status-page-id'))]));
    }
}
