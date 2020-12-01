<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodStopCommand extends Command
{
    /** @var string */
    protected $signature = 'maintenance-period:stop
                            {site-id : The id of the site that you want to stop the maintenance period for}';

    /** @var string */
    protected $description = 'Stop the current maintenance period for a site';

    public function handle(OhDear $ohDear): void
    {
        $ohDear->stopSiteMaintenance($this->argument('site-id'));

        $this->info("Stopped the current maintenance period for site with id {$this->argument('site-id')}");
    }
}
