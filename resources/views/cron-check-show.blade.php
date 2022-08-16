<x-layouts.app>
    <div class="underline">Cron Checks:</div>

    <ul>
        @forelse($cronChecks as $cronCheck)
            <li>
                <span class="font-bold text-gray">{{ $cronCheck->name }}</span> (schedule: {{ $cronCheck->cronExpression ?: "every {$cronCheck->frequencyInMinutes} minutes" }}, grace time: {{ $cronCheck->graceTimeInMinutes }} minutes) (ping url: {{ $cronCheck->pingUrl }})
            </li>
        @empty
            <li class="list-none">
                <span>No cron checks were found for the specified site.</span>
            </li>
        @endforelse
    </ul>
</x-layouts.app>
