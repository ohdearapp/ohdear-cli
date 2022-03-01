<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class CronCheckDeleteCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'cron-check:delete
                            {id : The id of the cron check that you want to delete}';

    /** @var string */
    protected $description = 'Delete a cron check';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $ohDear->deleteCronCheck($this->argument('id'));

        render(view('notice', [
            'notice' => "Removed the cron check with id {$this->argument('id')}"
        ]));
    }
}
