<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use function Termwind\render;

class DnsHistoryShowCommand extends Command
{
    use EnsureHasToken;

    /** @var string */
    protected $signature = 'dns-history:show {site-id : The id of the site to access DNS history items for}
                                             {id : The id of the DNS history item to view}';

    /** @var string */
    protected $description = 'Display the latest performance details for a site';

    public function handle(OhDear $ohDear)
    {
        if (! $this->ensureHasToken()) {
            return 1;
        }

        render(view('dns-history-show', [
            'dnsHistoryItem' => $ohDear->dnsHistoryItem($this->argument('site-id'), $this->argument('id'))
        ]));
    }
}
