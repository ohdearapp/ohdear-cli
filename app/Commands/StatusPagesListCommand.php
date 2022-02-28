<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class StatusPagesListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'status-pages:list';

    /** @var string */
    protected $description = 'Display a list of status pages and their summary';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('status-pages-list', ['statusPages' => $ohDear->statusPages()]));
    }
}
