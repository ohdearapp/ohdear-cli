<div class="ml-2 my-1">
    <div>
        <span class="underline">Certificate Details</span>
        <span class="font-bold text-gray block">Issuer:</span> {{ $certificateHealth->certificateDetails['issuer'] }}
        <span
            class="font-bold text-gray block">Valid From:</span> {{ $certificateHealth->certificateDetails['valid_from'] }}
        <span
            class="font-bold text-gray block">Valid Until:</span> {{ $certificateHealth->certificateDetails['valid_until'] }}
    </div>

    @if ($withChecks)
        <div class="underline mt-1">Certificate Checks:</div>

        <ul>
            @forelse ($certificateHealth->certificateChecks as $check)
                <li>
                    <span class="font-bold text-gray">{{ $check['label'] }}</span>
                    ({{ $check['passed'] ? 'Passed' : 'Failed' }})
                </li>
            @empty
                <li class="list-none">
                    <span>No certificate checks were found for the specified site.</span>
                </li>
            @endforelse
        </ul>
    @endif

    @if ($withIssuers)
        <div class="underline mt-1">Issuers:</div>

        <ul>
            @forelse ($certificateHealth->certificateChainIssuers as $issuer)
                <li>
                    <span class="font-bold text-gray">{{ $issuer }}</span>
                </li>
            @empty
                <li class="list-none">
                    <span>No issuers were found for the specified site.</span>
                </li>
            @endforelse
        </ul>
    @endif
</div>
