<?php

namespace App\Commands;

use OhDear\PhpSdk\OhDear;
use Illuminate\Support\Collection;
use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;

class StatusPagesListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-pages:list';

    /** @var string */
    protected $description = 'Display a list of status pages and their summary';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

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
