<?php

namespace App\Commands;

use App\Commands\Concerns\EnsureHasToken;
use Illuminate\Support\Collection;
use LaravelZero\Framework\Commands\Command;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\DnsHistoryItem;

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

        $dnsHistoryItem = $ohDear->dnsHistoryItem($this->argument('site-id'), $this->argument('id'));

        $this->output->text([
            "<options=bold>ID:</> {$dnsHistoryItem->id}",
            "<options=bold>Summary:</> {$dnsHistoryItem->diffSummary}",
            "<options=bold>Created:</> {$dnsHistoryItem->createdAt}",
            '',
        ]);

        $this->line(" <options=bold,underscore>Authoritative Nameservers</>\n");

        $this->output->listing(
            Collection::make($dnsHistoryItem->authoritativeNameservers)
                ->whenEmpty(fn ($collection) => $collection->push('No nameservers were detected...'))
                ->toArray()
        );

        $this->line(" <options=bold,underscore>DNS Records</>\n");

        $this->output->listing(
            Collection::make($dnsHistoryItem->dnsRecords)->map(function (array $dnsRecord) {
                return sprintf(
                    "{$dnsRecord['type']} - {$dnsRecord['host']}, %s (TTL {$dnsRecord['ttl']})",
                    $this->formatDnsType($dnsRecord)
                );
            })->whenEmpty(fn ($collection) => $collection->push('No DNS records were found...'))->toArray()
        );

        $this->line(" <options=bold,underscore>Issues</>\n");

        $this->output->listing(
            Collection::make($dnsHistoryItem->issues)->take(5)->map(static function (array $issue) {
                return $issue['name'];
            })->whenEmpty(fn ($collection) => $collection->push('No issues were detected...'))->toArray()
        );
    }

    private function formatDnsType(array $dnsRecord)
    {
        return match($dnsRecord['type']) {
            'A' => "{$dnsRecord['type']} / {$dnsRecord['ip']}",
            'AAAA' => "{$dnsRecord['type']} / {$dnsRecord['ipv6']}",
            'MX' => "{$dnsRecord['type']} / {$dnsRecord['target']} / {$dnsRecord['pri']},",
            'NS' => "{$dnsRecord['type']} / {$dnsRecord['target']},",
            'SOA' => "{$dnsRecord['type']} / {$dnsRecord['mname']} / {$dnsRecord['serial']},",
            'TXT' => "{$dnsRecord['type']} / {$dnsRecord['txt']},",
            default => "{$dnsRecord['type']}"
        };
    }
}
