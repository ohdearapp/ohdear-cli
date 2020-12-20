<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodStartCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'maintenance-period:start
                            {site-id : The id of the site that you want to create a maintenance period for}
                            {seconds : The maintenance period in seconds}';

    /** @var string */
    protected $description = 'Start a new maintenance period for a site from the current time';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $seconds = $this->argument('seconds');

        if (! $seconds || ! is_numeric($seconds)) {
            $this->warn('A valid number of seconds must be provided');

            return;
        }

        $maintenancePeriod = $ohDear->startSiteMaintenance($this->argument('site-id'), (int) $seconds);

        $this->output->text([
            "<options=bold>ID:</> {$maintenancePeriod->id}",
            "<options=bold>Site ID:</> {$maintenancePeriod->siteId}",
            "<options=bold>Starts At:</> {$maintenancePeriod->startsAt}",
            "<options=bold>Ends At:</> {$maintenancePeriod->endsAt}",
            '',
        ]);
    }
}
