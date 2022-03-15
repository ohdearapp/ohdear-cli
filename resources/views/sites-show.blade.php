<div class="ml-2 my-1">
    <div>
        <span class="font-bold text-gray block">ID:</span> {{ $site->id }}
        <span class="font-bold text-gray block">URL:</span> {{ $site->url }}
        <span class="font-bold text-gray block">Status Summary:</span> {{ $site->attributes['summarized_check_result'] }}
        <span class="font-bold text-gray block">Last Run At:</span> {{ $site->attributes['latest_run_date'] }}
        <span class="font-bold text-gray block">Uptime in last 24hrs:</span> {{ $uptimePercentage }}
    </div>

    <div class="underline mt-1">Checks:</div>

    <ul>
        @forelse ($site->checks as $check)
            <li>
                <span class="font-bold text-gray capitalize">{{ $check->label }}</span> ({{ $check->enabled ? 'Enabled' : 'Disabled' }})
            </li>
        @empty
            <li class="list-none">
                <span>No checks were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</div>
