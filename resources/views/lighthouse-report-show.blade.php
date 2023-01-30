<x-layouts.app>
    <div>
        <span class="font-bold text-gray block">ID:</span> {{ $lighthouseReport->id }}
        <span class="font-bold text-gray block">Performed on Server:</span> {{ $lighthouseReport->performedOnCheckerServer }}
        <span class="font-bold text-gray block">Created At:</span> {{ $lighthouseReport->createdAt }}
    </div>

    <div class="underline mt-1">Scores:</div>

    <div>
        <span class="font-bold text-gray block">Performance Score:</span> {{ $lighthouseReport->performanceScore }}
        <span class="font-bold text-gray block">Accessibility Score:</span> {{ $lighthouseReport->accessibilityScore }}
        <span class="font-bold text-gray block">Best Practices Score:</span> {{ $lighthouseReport->bestPracticesScore }}
        <span class="font-bold text-gray block">SEO Score:</span> {{ $lighthouseReport->seoScore }}
        <span class="font-bold text-gray block">PWA Score:</span> {{ $lighthouseReport->progressiveWebAppScore }}
    </div>

    <div class="underline mt-1">Speed:</div>

    <div>
        <span class="font-bold text-gray block">First Contentful Pain (ms):</span> {{ $lighthouseReport->firstContentfulPaintInMs }}
        <span class="font-bold text-gray block">Speed Index (ms):</span> {{ $lighthouseReport->speedIndexInMs }}
        <span class="font-bold text-gray block">Largest Contentful Paint (ms):</span> {{ $lighthouseReport->largestContentfulPaintInMs }}
        <span class="font-bold text-gray block">Time to Interactive (ms):</span> {{ $lighthouseReport->timeToInteractiveInMs }}
        <span class="font-bold text-gray block">Total Blocking Time (ms):</span> {{ $lighthouseReport->totalBlockingTimeInMs }}
        <span class="font-bold text-gray block">Cumulative Layout Shift:</span> {{ $lighthouseReport->cumulativeLayoutShift }}
    </div>

    <div class="underline mt-1">Issues:</div>

    <ul>
        @forelse ($lighthouseReport->issues as $issue)
            <li>
                <span class="font-bold text-gray">{{ $issue['category'] }} ({{ $issue['actualScore'] }})</span>
            </li>
        @empty
            <li class="list-none">
                <span>No issues were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
