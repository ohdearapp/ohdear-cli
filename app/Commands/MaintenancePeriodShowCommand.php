<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\MaintenancePeriod;

class MaintenancePeriodShowCommand extends Command
{
    /** @var string */
    protected $signature = 'maintenance-period:show {site-id : The id of the site to view maintenance periods for}';

    /** @var string */
    protected $description = 'Display the maintenance periods for a site';

    public function handle(OhDear $ohDear): void
    {
        $maintenancePeriods = $ohDear->maintenancePeriods($this->argument('site-id'));

        if (empty($maintenancePeriods)) {
            $this->line('Unable to find any maintenance periods for the specified site');

            return;
        }

        $this->output->listing(
            collect($maintenancePeriods)->map(static function (MaintenancePeriod $maintenancePeriod) {
                return "{$maintenancePeriod->id} (site: {$maintenancePeriod->siteId}) ({$maintenancePeriod->startsAt} to {$maintenancePeriod->endsAt})";
            })->toArray()
        );
    }
}
