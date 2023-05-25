<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class LighthouseReportListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'lighthouse-report:list {site-id : The id of the site to view Lighthouse reports for}';

    /** @var string */
    protected $description = 'Display a list of Lighthouse reports and their summary';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('lighthouse-report-list', ['lighthouseReports' => $ohDear->lighthouseReports($this->argument('site-id'))]));
    }
}
