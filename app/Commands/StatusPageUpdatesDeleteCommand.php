<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class StatusPageUpdatesDeleteCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-page-updates:delete
                            {id : The id of the status page update that you want to delete}';

    /** @var string */
    protected $description = 'Delete a status page update';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->deleteStatusPageUpdate($this->argument('id'));

        $this->info("Removed the status page update with id {$this->argument('id')}");
    }
}
