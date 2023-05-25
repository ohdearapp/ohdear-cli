<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\BrokenLink;
use function Termwind\render;

class BrokenLinkShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'broken-link:show {site-id : The id of the site to view broken links for}';

    /** @var string */
    protected $description = 'Display the broken links for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $brokenLinkList = collect($ohDear->brokenLinks($this->argument('site-id')))
            ->mapToGroups(fn (BrokenLink $brokenLink) => [$brokenLink->foundOnUrl => $brokenLink]);

        render(view('broken-link-show', ['brokenLinkList' => $brokenLinkList]));
    }
}
