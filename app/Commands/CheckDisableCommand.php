<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class CheckDisableCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'check:disable {id : The id of the check to disable}';

    /** @var string */
    protected $description = 'Disable a specific check';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->disableCheck($this->argument('id'));

        render(view('notice', [
            'notice' => "Disabled the check with id {$this->argument('id')}"
        ]));
    }
}
