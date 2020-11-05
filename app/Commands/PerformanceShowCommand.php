<?php

namespace App\Commands;

use Carbon\Carbon;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class PerformanceShowCommand extends Command
{
    /** @var string */
    protected $signature = 'performance:show {id : The id of the status page to view}
                                             {start-date? : The date to start at}
                                             {end-date? : The date to end at}
                                             {--limit=5 : The number of records to show}
                                             {--timeframe=1h : The timeframe to query data by}';

    /** @var string */
    protected $description = 'Display the latest performance details for a site';

    public function handle(OhDear $ohDear)
    {
        if (!$startDate = $this->argument('start-date')) {
            $startDate = Carbon::yesterday()->format('Y-m-d');
        }

        if (!$endDate = $this->argument('end-date')) {
            $endDate = now()->format('Y-m-d');
        }

        $timeframe = in_array($this->option('limit'), ['1h', '1m']) ? $this->option('limit') : '1h';

        $performances = $ohDear->performanceRecords($this->argument('id'), $startDate, $endDate, $timeframe);

        $performanceData = collect($performances['data']->attributes ?? [])->take((int) $this->option('limit'))->map(static function ($performance) {
            return [
                $performance['id'],

                # All times converted from seconds to milliseconds
                $performance['time_total'] * 1000,
                $performance['time_namelookup'] * 1000,
                $performance['time_remoteserver'] * 1000,
                round($performance['time_download'] * 1000, 5),

                $performance['created_at'],
            ];
        })->toArray();

        $this->table(['ID', 'Total (ms)', 'DNS (ms)', 'Remote Server (ms)', 'Download (ms)', 'Created'], $performanceData);
    }
}
