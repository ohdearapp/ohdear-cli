<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class CronCheckAddCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'cron-check:add
                            {site-id : The id of the site that you want to create a cron check for}
                            {name : The name of the cron check}
                            {frequency-or-expression : The frequency of the cron check in minutes, or cron expression}
                            {--grace-time=5 : The grace time in minutes}
                            {--description= : The description for the cron check}
                            {--timezone=UTC : The timezone of your server}';

    /** @var string */
    protected $description = 'Add a new cron check for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        if (! $name = $this->argument('name')) {
            $this->warn('A valid name must be provided');

            return;
        }

        $cronCheck = is_numeric($this->argument('frequency-or-expression')) ?
            $ohDear->createSimpleCronCheck(
                $this->argument('site-id'),
                $name,
                (int) $this->argument('frequency-or-expression'),
                (int) $this->option('grace-time'),
                $this->option('description'),
            ) :
            $ohDear->createCronCheck(
                $this->argument('site-id'),
                $name,
                $this->argument('frequency-or-expression'),
                (int) $this->option('grace-time'),
                $this->option('description'),
                $this->option('timezone')
            );

        $schedule = $cronCheck->cronExpression ?: "every {$cronCheck->frequencyInMinutes} minutes";

        $this->line("{$cronCheck->name} (schedule: {$schedule}, grace time: {$cronCheck->graceTimeInMinutes} minutes) (ping url: {$cronCheck->pingUrl})");
    }
}
