<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class MaintenancePeriodShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'maintenance-period:show {site-id : The id of the site to view maintenance periods for}';

    /** @var string */
    protected $description = 'Display the maintenance periods for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('maintenance-period-show', [
            'maintenancePeriods' => $ohDear->maintenancePeriods($this->argument('site-id')),
        ]));
    }
}
