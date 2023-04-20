<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\MixedContentItem;

use function Termwind\render;

class MixedContentShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'mixed-content:show {site-id : The id of the site to view mixed content for}';

    /** @var string */
    protected $description = 'Display the mixed content for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $mixedContentList = collect($ohDear->mixedContent($this->argument('site-id')))
            ->mapToGroups(fn (MixedContentItem $mixedContent) => [$mixedContent->foundOnUrl => $mixedContent]);

        render(view('mixed-content-show', ['mixedContentList' => $mixedContentList]));
    }
}
