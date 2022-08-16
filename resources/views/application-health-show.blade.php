@php /** @var array<int, OhDear\PhpSdk\Resources\ApplicationHealthCheck> $applicationHealthChecks */ @endphp
<x-layouts.app>
    <div class="underline mt-1">Application Health:</div>

    <ul>
        @forelse ($applicationHealthChecks as $check)
            <li>
                <span class="font-bold text-gray">{{ $check->label }}</span>
                ({{ $check->status }}) @if($check->message) - {{ $check->message }}@endif
            </li>
        @empty
            <li class="list-none">
                <span>No application checks were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
