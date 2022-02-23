<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\DnsHistoryItem;

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

        $dnsHistoryItems = Collection::make($ohDear->dnsHistoryItems($this->argument('site-id')))->map(static function (DnsHistoryItem $dnsHistoryItem) {
            return [
                $dnsHistoryItem->id,
                $dnsHistoryItem->diffSummary,
                $dnsHistoryItem->createdAt,
            ];
        });

        $this->table(['ID', 'Difference Summary', 'Created'], $dnsHistoryItems);
    }
}
