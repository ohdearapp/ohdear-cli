<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use Carbon\Carbon;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class DowntimeShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'downtime:show {site-id : The id of the site to view downtime for}
                                          {start-date? : The date to start at}
                                          {end-date? : The date to end at}
                                          {--limit=10 : The number of downtime records to show}';

    /** @var string */
    protected $description = 'Display the recent downtime for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        if (! $startDate = $this->argument('start-date')) {
            $startDate = Carbon::yesterday()->format('YmdHis');
        }

        if (! $endDate = $this->argument('end-date')) {
            $endDate = now()->format('YmdHis');
        }

        $downtime = collect($ohDear->downtime($this->argument('site-id'), $startDate, $endDate))
            ->take((int) $this->option('limit'));

        render(view('downtime-show', ['downtime' => $downtime]));
    }
}
