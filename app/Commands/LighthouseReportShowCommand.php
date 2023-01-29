<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class LighthouseReportShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'lighthouse-report:show {site-id : The id of the site to access Lighthouse reports for}
                                                   {id=latest : The id of the Lighthouse report to view}';

    /** @var string */
    protected $description = 'Display the latest Lighthouse report for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $lighthouseReport = $this->argument('id') === 'latest'
            ? $ohDear->latestLighthouseReport($this->argument('site-id'))
            : $ohDear->lighthouseReport($this->argument('site-id'), $this->argument('id'));

        render(view('lighthouse-report-show', [
            'lighthouseReport' => $lighthouseReport,
        ]));
    }
}
