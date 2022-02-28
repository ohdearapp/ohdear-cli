<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class SitesShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'sites:show {id : The id of the site to view}';

    /** @var string */
    protected $description = 'Display a single site and its current status';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $site = $ohDear->site($this->argument('id'));

        $uptimePercentage = $site->uptime(
            now()->subDay()->format('YmdHis'),
            now()->format('YmdHis'),
            'day'
        )[0]->uptimePercentage ?? 'unknown';

        render(view('sites-show', compact('site', 'uptimePercentage')));
    }
}
