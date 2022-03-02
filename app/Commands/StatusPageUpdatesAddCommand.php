<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class StatusPageUpdatesAddCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-page-updates:add
                            {status-page-id : The id of the status page that the update should be added to}
                            {title : The title of the update}
                            {text : The main text of the update}
                            {--s|severity=info : The severity of the update (info, warning, high, resolved, or scheduled)}
                            {--p|pinned : The update should be pinned to the top of the status page}
                            {--t|time= : The time that the update should be registered at (default: now)}';

    /** @var string */
    protected $description = 'Add a new update to a status page';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        if ($this->option('severity') && ! in_array($this->option('severity'), ['info', 'warning', 'high', 'resolved', 'scheduled'])) {
            $this->warn('Invalid severity level provided');

            return 1;
        }

        $statusPageUpdate = $ohDear->createStatusPageUpdate([
            'status_page_id' => $this->argument('status-page-id'),
            'title' => $this->argument('title'),
            'text' => $this->argument('text'),
            'severity' => $this->option('severity'),
            'pinned' => (bool) $this->option('pinned'),
            'time' => $this->option('time') ?? now()->format('Y-m-d H:i'),
        ]);

        render(view('notice', ['notice' => "Created a new status page update with id {$statusPageUpdate->id}"]));

        render(view('status-page-updates-list', ['statusPageUpdates' => [$statusPageUpdate]]));
    }
}
