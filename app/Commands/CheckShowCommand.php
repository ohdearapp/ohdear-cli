<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Check;
use function Termwind\render;

class CheckShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'check:show {site-id : The id of the site to view checks for}';

    /** @var string */
    protected $description = 'Display the checks for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        $checks = $ohDear->site($this->argument('site-id'))->checks;

        render(view('check-show', ['checks' => $checks]));
    }
}
