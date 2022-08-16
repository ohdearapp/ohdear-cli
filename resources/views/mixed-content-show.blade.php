<x-layouts.app>
    @forelse($mixedContentList as $foundOnUrl => $mixedContents)
        <div>
            <div class="underline mt-1">{{ $foundOnUrl }}</div>

            <ul>
                @forelse ($mixedContents as $mixedContent)
                    <li>
                        <span class="font-bold text-gray">{{ $mixedContent->elementName }}</span> ({{ $mixedContent->mixedContentUrl }})
                    </li>
                @empty
                    <li class="list-none">
                        <span>No mixed content was found for the specified site.</span>
                    </li>
                @endforelse
            </ul>
        </div>
    @empty
        <div>
            <span>No mixed content was found for the specified site.</span>
        </div>
    @endforelse
</x-layouts.app>
