<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use Carbon\Carbon;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class PerformanceShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'performance:show {id : The id of the site to view}
                                             {start-date? : The date to start at}
                                             {end-date? : The date to end at}
                                             {--limit=5 : The number of records to show}
                                             {--timeframe=1h : The timeframe to query data by}';

    /** @var string */
    protected $description = 'Display the latest performance details for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        if (! $startDate = $this->argument('start-date')) {
            $startDate = Carbon::yesterday()->format('Y-m-d');
        }

        if (! $endDate = $this->argument('end-date')) {
            $endDate = now()->format('Y-m-d');
        }

        $timeframe = in_array($this->option('timeframe'), ['1h', '1m']) ? $this->option('timeframe') : '1h';

        $performances = $ohDear->performanceRecords($this->argument('id'), $startDate, $endDate, $timeframe);

        render(view('performance-show', ['performances' => collect($performances ?? [])->take((int) $this->option('limit'))]));
    }
}
