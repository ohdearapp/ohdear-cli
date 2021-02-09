<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodAddCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'maintenance-period:add
                            {site-id : The id of the site that you want to create a maintenance period for}
                            {start-date : The start date that you want to create a maintenance period for}
                            {end-date : The end date that you want to create a maintenance period for}';

    /** @var string */
    protected $description = 'Add a new maintenance period for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        if (! $startDate = $this->argument('start-date')) {
            $this->warn('A valid start date must be provided');

            return;
        }

        if (! $endDate = $this->argument('end-date')) {
            $this->warn('A valid end date must be provided');

            return;
        }

        $maintenancePeriod = $ohDear->createSiteMaintenance($this->argument('id'), $startDate, $endDate);

        $this->output->text([
            '<options=bold,underscore>Maintenance Period Details</>',
            "<options=bold>ID:</> {$maintenancePeriod->id}",
            "<options=bold>Site ID:</> {$maintenancePeriod->siteId}",
            "<options=bold>Starts At:</> {$maintenancePeriod->startsAt}",
            "<options=bold>Ends At:</> {$maintenancePeriod->endsAt}",
        ]);
    }
}
