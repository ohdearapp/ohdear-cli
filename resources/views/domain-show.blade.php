<x-layouts.app>
    <div>
        <span class="font-bold text-gray block">Domain Name:</span> {{ $domain->rdapDomainResponse['ldhName'] ?? 'Unknown' }}
        <span class="font-bold text-gray block">Domain Handle:</span> {{ $domain->rdapDomainResponse['handle'] ?? 'Unknown' }}
    </div>

    <div class="mt-1">
        <span class="font-bold text-gray block">Expires At:</span> {{ $domain->expiresAt }}
        <span class="font-bold text-gray block">Registered At:</span> {{ $domain->registeredAt }}
        <span class="font-bold text-gray block">Last Changed At:</span> {{ $domain->lastChangedAt }}
        <span class="font-bold text-gray block">Last Updated in RDAP At:</span> {{ $domain->lastUpdatedInRdapDbAt }}
    </div>

    <div class="underline mt-1">Domain Statuses:</div>

    <ul>
        @forelse ($domain->domainStatuses as $status => $result)
            <li>
                <span class="font-bold text-gray capitalize">{{ $status }}</span> ({{ $result ? 'Yes' : 'No' }})
            </li>
        @empty
            <li class="list-none">
                <span>No statuses were found for the specified site's domain.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
