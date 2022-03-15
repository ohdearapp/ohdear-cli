<div class="ml-2 my-1">
    <div>
        <span class="font-bold text-gray block">ID:</span> {{ $dnsHistoryItem->id }}
        <span class="font-bold text-gray block">Status Summary:</span> {{ $dnsHistoryItem->diffSummary }}
        <span class="font-bold text-gray block">Created At:</span> {{ $dnsHistoryItem->createdAt }}
    </div>

    <div class="underline mt-1">Authoritative Nameservers:</div>

    <ul>
        @forelse ($dnsHistoryItem->authoritativeNameservers as $nameserver)
            <li>
                <span class="font-bold text-gray">{{ $nameserver }}</span>
            </li>
        @empty
            <li class="list-none">
                <span>No nameservers were found for the specified site.</span>
            </li>
        @endforelse
    </ul>

    <div class="underline mt-1">DNS Records:</div>

    <ul>
        @forelse ($dnsHistoryItem->dnsRecords as $dnsRecord)
            <li>
                <span class="font-bold text-gray">{{ $dnsRecord['type'] }}</span> - {{ $dnsRecord['host'] }}, <span class="text-gray">{{ format_dns_type($dnsRecord) }}</span> (TTL {{ $dnsRecord['ttl'] }})
            </li>
        @empty
            <li class="list-none">
                <span>No nameservers were found for the specified site.</span>
            </li>
        @endforelse
    </ul>

    <div class="underline mt-1">Issues:</div>

    <ul>
        @forelse ($dnsHistoryItem->issues as $issue)
            <li>
                <span class="font-bold text-gray">{{ $dnsRecord['name'] }}</span>
            </li>
        @empty
            <li class="list-none">
                <span>No issues were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</div>
