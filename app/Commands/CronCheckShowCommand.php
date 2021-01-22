<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\CronCheck;

class CronCheckShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'cron-check:show {site-id : The id of the site to view cron checks for}';

    /** @var string */
    protected $description = 'Display the cron checks for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $cronChecks = $ohDear->cronChecks($this->argument('site-id'));

        if (empty($cronChecks)) {
            $this->line('Unable to find any cron checks for the specified site');

            return;
        }

        $this->output->listing(
            collect($cronChecks)->map(static function (CronCheck $cronCheck) {
                $schedule = $cronCheck->cronExpression ?? "every {$cronCheck->frequencyInMinutes} minutes";

                return "{$cronCheck->name} (schedule: {$schedule}, grace time: {$cronCheck->graceTimeInMinutes} minutes) (ping url: {$cronCheck->pingUrl})";
            })->toArray()
        );
    }
}
