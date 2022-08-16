<x-layouts.app>
    <div class="underline">Uptime:</div>

    <ul>
        @forelse ($uptime as $entry)
            <li>
                <span class="font-bold text-gray">{{ $entry->datetime }}</span> ({{ $entry->uptimePercentage }}%)
            </li>
        @empty
            <li class="list-none">
                <span>No uptime entries were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
