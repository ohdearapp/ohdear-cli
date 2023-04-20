<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class SitesListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'sites:list';

    /** @var string */
    protected $description = 'Display a list of sites and their current status';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('sites-list', ['sites' => $ohDear->sites()]));
    }
}
