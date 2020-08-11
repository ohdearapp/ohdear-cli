<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Check;

class SitesShowCommand extends Command
{
    /** @var string */
    protected $signature = 'sites:show {id : The id of the site to view}';

    /** @var string */
    protected $description = 'Display a single site and its current status';

    public function handle(OhDear $ohDear): void
    {
        $site = $ohDear->site($this->argument('id'));

        $uptimePercentage = $site->uptime(
                now()->subDay()->format('YmdHis'),
                now()->format('YmdHis'),
                'day'
            )[0]->uptimePercentage ?? 'unknown';

        $this->output->text([
            "<options=bold>ID:</> {$site->id}",
            "<options=bold>URL:</> {$site->url}",
            "<options=bold>Status Summary:</> {$site->attributes['summarized_check_result']}",
            "<options=bold>Last run at:</> {$site->attributes['latest_run_date']}",
            "<options=bold>Uptime in last 24hrs:</> {$uptimePercentage}%",
            '',
        ]);

        $this->line(" <options=bold,underscore>Checks</>\n");

        $this->output->listing(
            collect($site->checks)->map(static function (Check $check) {
                return "{$check->label} (".($check->enabled ? 'Enabled' : 'Disabled').')';
            })->toArray()
        );
    }
}
