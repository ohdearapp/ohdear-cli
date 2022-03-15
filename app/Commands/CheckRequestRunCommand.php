<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class CheckRequestRunCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'check:request-run {id : The id of the check to run}';

    /** @var string */
    protected $description = 'Request a new run for a specific check';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->requestRun($this->argument('id'));

        render(view('notice', [
            'notice' => "Requested a run for the check with id {$this->argument('id')}",
        ]));
    }
}
