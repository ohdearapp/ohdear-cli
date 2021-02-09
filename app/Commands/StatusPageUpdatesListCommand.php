<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class StatusPageUpdatesListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-page-updates:list { status-page-id : The id of the status page }';

    /** @var string */
    protected $description = 'Display a list of status page updates';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $statusPageUpdateData = Collection::make($ohDear->statusPageUpdates($this->argument('status-page-id')))->map(static function ($statusPageUpdate) {
            return [
                $statusPageUpdate->id,
                $statusPageUpdate->title,
                $statusPageUpdate->severity,
                $statusPageUpdate->text,
                $statusPageUpdate->pinned ? 'yes' : 'no',
                $statusPageUpdate->time,
            ];
        });

        $this->table(['ID', 'Title', 'Severity', 'Text', 'Pinned', 'Time'], $statusPageUpdateData);
    }
}
