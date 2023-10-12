<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

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

        render(view('cron-check-show', ['cronChecks' => $ohDear->cronChecks($this->argument('site-id'))]));
    }
}
