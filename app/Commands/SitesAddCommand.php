<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class SitesAddCommand extends Command
{
    /** @var string */
    protected $signature = 'sites:add
                            {url : The url of the site that you want to add}
                            {--t|team= : The id of the team that the site should be added to}
                            {--c|checks=* : The list of checks that should be used, defaults to all checks';

    /** @var string */
    protected $description = 'Add a new site to Oh Dear';

    public function handle(OhDear $ohDear): void
    {
        if (! ($url = $this->argument('url'))) {
            $this->warn('A valid URL must be provided');

            return;
        }

        if (! ($teamId = $this->option('team')) || ! is_numeric($teamId)) {
            $this->warn('A valid team id must be provided');

            return;
        }

        $checks = $this->hasOption('checks') ? ['checks' => $this->option('checks')] : [];

        $site = $ohDear->createSite(array_merge([
            'url' => $url,
            'team_id' => $teamId,
        ], $checks));

        $this->table(['ID', 'URL', 'Status Summary', 'Last Checked'], [
            $site->id,
            $site->url,
        ]);
    }
}
