<?php

namespace App\Commands;

use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\BrokenLink;

class BrokenLinkShowCommand extends Command
{
    /** @var string */
    protected $signature = 'broken-link:show {site-id : The id of the site to view broken links for}';

    /** @var string */
    protected $description = 'Display the broken links for a site';

    public function handle(OhDear $ohDear): void
    {
        $brokenLinks = $ohDear->brokenLinks($this->argument('site-id'));

        if (empty($brokenLinks)) {
            $this->line('Unable to find any broken links for the specified site');

            return;
        }

        collect($brokenLinks)->mapToGroups(function (BrokenLink $brokenLink) {
            return [$brokenLink->foundOnUrl => $brokenLink];
        })->each(function (Collection $brokenLinkItems, string $key) {
            $this->info($key);

            $this->output->listing(
                $brokenLinkItems->map(static function (BrokenLink $item) {
                    return "({$item->statusCode}) {$item->crawledUrl}";
                })->toArray()
            );
        });
    }
}
