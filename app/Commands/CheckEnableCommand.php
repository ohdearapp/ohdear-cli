<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class CheckEnableCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'check:enable {id : The id of the check to enable}';

    /** @var string */
    protected $description = 'Enable a specific check';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->enableCheck($this->argument('id'));

        render(view('notice', [
            'notice' => "Enabled the check with id {$this->argument('id')}",
        ]));
    }
}
