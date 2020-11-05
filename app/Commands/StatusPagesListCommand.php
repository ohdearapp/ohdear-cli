<?php

namespace App\Commands;

use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class StatusPagesListCommand extends Command
{
    /** @var string */
    protected $signature = 'status-pages:list';

    /** @var string */
    protected $description = 'Display a list of status pages and their summary';

    public function handle(OhDear $ohDear)
    {
        $statusPageData = Collection::make($ohDear->statusPages())->map(static function ($statusPage) {
            return [
                $statusPage->id,
                $statusPage->title,
                $statusPage->attributes['summarized_status'],
                implode(',', collect($statusPage->attributes['sites'])->map(function (array $site) {
                    return $site['sort_url'];
                })->toArray()),
            ];
        });

        $this->table(['ID', 'Name', 'Status Summary', 'Sites'], $statusPageData);
    }
}
