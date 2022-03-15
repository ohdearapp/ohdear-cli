<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class DnsHistoryListCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'dns-history:list {site-id : The id of the site to view DNS history for}';

    /** @var string */
    protected $description = 'Display a list of DNS history items and their summary';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('dns-history-list', ['dnsHistoryItems' => $ohDear->dnsHistoryItems($this->argument('site-id'))]));
    }
}
