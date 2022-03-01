<div class="ml-2 my-1">
    <div class="underline">Downtime:</div>

    <ul>
        @forelse($downtime as $entry)
            <li>
                <span class="font-bold text-gray">{{ $entry->startedAt }}</span> to {{ $cronCheck->endedAt }}
            </li>
        @empty
            <li class="list-none">
                <span>No downtime entries were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</div>
