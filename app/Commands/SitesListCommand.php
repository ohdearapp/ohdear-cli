<?php

namespace App\Commands;

use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

class SitesListCommand extends Command
{
    /** @var string */
    protected $signature = 'sites:list';

    /** @var string */
    protected $description = 'Display a list of sites and their current status';

    public function handle(OhDear $ohDear): void
    {
        $siteData = Collection::make($ohDear->sites())->map(static function ($site) {
            return [
                $site->id,
                $site->url,
                $site->attributes['summarized_check_result'],
                $site->attributes['latest_run_date'],
            ];
        });

        $this->table(['ID', 'URL', 'Status Summary', 'Last Checked'], $siteData);
    }
}
