<x-layouts.app>
    @forelse($brokenLinkList as $foundOnUrl => $brokenLinks)
        <div>
            <div class="underline mt-1">{{ $foundOnUrl }}</div>

            <ul>
                @forelse ($brokenLinks as $brokenLink)
                    <li>
                        <span class="font-bold text-gray">{{ $brokenLink->statusCode }}</span> ({{ $brokenLink->crawledUrl }})
                    </li>
                @empty
                    <li class="list-none">
                        <span>No broken links were found for the specified site.</span>
                    </li>
                @endforelse
            </ul>
        </div>
    @empty
        <div>
            <span>No broken links were found for the specified site.</span>
        </div>
    @endforelse
</x-layouts.app>
