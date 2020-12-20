<?php

namespace App\Commands;

use OhDear\PhpSdk\OhDear;
use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;

class StatusPagesShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-pages:show {id : The id of the status page to view}';

    /** @var string */
    protected $description = 'Display a single status page and its details';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $statusPage = $ohDear->statusPage($this->argument('id'));

        $this->output->text([
            "<options=bold>ID:</> {$statusPage->id}",
            "<options=bold>Title:</> {$statusPage->title}",
            "<options=bold>URL:</> {$statusPage->fullUrl}",
            "<options=bold>Timezone:</> {$statusPage->timezone}",
            "<options=bold>Status Summary:</> {$statusPage->summarizedStatus}",
            '',
        ]);

        $this->line(" <options=bold,underscore>Sites</>\n");

        $this->output->listing(
            collect($statusPage->attributes['sites'])->map(function (array $site) {
                return $site['sort_url'];
            })->toArray()
        );

        $this->line(" <options=bold,underscore>Latest Updates</>\n");

        $this->output->listing(
            collect($statusPage->attributes['updates'])->take(5)->map(static function (array $update) {
                return "{$update['title']} ({$update['severity']}, {$update['time']})";
            })->toArray()
        );
    }
}
