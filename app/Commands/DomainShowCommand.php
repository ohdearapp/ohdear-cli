<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;

use function Termwind\render;

class DomainShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'domain:show {site-id : The id of the site to view domain information for}';

    /** @var string */
    protected $description = 'Display the domain information for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('domain-show', [
            'domain' => $ohDear->domain($this->argument('site-id')),
        ]));
    }
}
