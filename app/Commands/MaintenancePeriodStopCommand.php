<?php

namespace App\Commands;

use OhDear\PhpSdk\OhDear;
use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;

class MaintenancePeriodStopCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'maintenance-period:stop
                            {site-id : The id of the site that you want to stop the maintenance period for}';

    /** @var string */
    protected $description = 'Stop the current maintenance period for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->stopSiteMaintenance($this->argument('site-id'));

        $this->info("Stopped the current maintenance period for site with id {$this->argument('site-id')}");
    }
}
