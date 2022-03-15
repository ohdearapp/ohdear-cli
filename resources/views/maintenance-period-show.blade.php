<div class="ml-2 my-1">
    <div class="underline">Maintenance Periods:</div>

    <ul>
        @forelse($maintenancePeriods as $maintenancePeriod)
            <li>
                <span class="font-bold text-gray">{{ $maintenancePeriod->id }}</span> (site: {{ $maintenancePeriod->siteId }}) ({{ $maintenancePeriod->startsAt }} to {{ $maintenancePeriod->endsAt }})
            </li>
        @empty
            <li class="list-none">
                <span>No maintenance periods were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</div>
