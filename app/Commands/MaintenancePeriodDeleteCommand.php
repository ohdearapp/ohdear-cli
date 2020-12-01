<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class MaintenancePeriodDeleteCommand extends Command
{
    /** @var string */
    protected $signature = 'maintenance-period:delete
                            {id : The id of the maintenance period that you want to delete}';

    /** @var string */
    protected $description = 'Delete a maintenance period';

    public function handle(OhDear $ohDear): void
    {
        $ohDear->deleteSiteMaintenance($this->argument('id'));

        $this->info("Removed the maintenance period with id {$this->argument('id')}");
    }
}
