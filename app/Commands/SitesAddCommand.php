<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class SitesAddCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'sites:add
                            {url : The url of the site that you want to add}
                            {--t|team= : The id of the team that the site should be added to}
                            {--c|checks=* : The list of checks that should be used, defaults to all checks}';

    /** @var string */
    protected $description = 'Add a new site to Oh Dear';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

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

        render(view('notice', ['notice' => "Created a new site with id {$site->id}"]));

        render(view('sites-show', ['site' => $site, 'uptimePercentage' => 'N/A']));
    }
}
