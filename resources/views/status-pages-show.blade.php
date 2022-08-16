<x-layouts.app>
    <div>
        <span class="font-bold text-gray block">ID:</span> {{ $statusPage->id }}
        <span class="font-bold text-gray block">Name:</span> {{ $statusPage->title }}
        <span class="font-bold text-gray block">URL:</span> {{ $statusPage->fullUrl }}
        <span class="font-bold text-gray block">Timezone:</span> {{ $statusPage->timezone }}
        <span class="font-bold text-gray block">Status Summary:</span> {{ $statusPage->summarizedStatus }}
    </div>

    <div class="underline mt-1">Sites:</div>

    <ul>
        @forelse ($statusPage->attributes['sites'] as $site)
            <li>
                <span class="font-bold text-gray">{{ $site['sort_url'] }}</span>
            </li>
        @empty
            <li class="list-none">
                <span>No sites were found for the specified status page.</span>
            </li>
        @endforelse
    </ul>

    <div class="underline mt-1">Latest Updates:</div>

    <ul>
        @forelse (collect($statusPage->attributes['updates'])->take(5) as $update)
            <li>
                <span class="font-bold text-gray">{{ $update['title'] }}</span> ({{ $update['severity'] }}, {{ $update['time'] }})
            </li>
        @empty
            <li class="list-none">
                <span>No sites were found for the specified status page.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
