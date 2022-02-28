<div class="ml-2 my-1">
    <div>
        <span class="font-bold text-gray block">ID:</span> {{ $user->id }}
        <span class="font-bold text-gray block">Name:</span> {{ $user->name }}
        <span class="font-bold text-gray block">Email:</span> {{ $user->email }}
    </div>

    <div class="underline mt-1">Teams:</div>

    <ul>
        @forelse ($user->teams as $team)
            <li>
                <span class="font-bold text-gray capitalize">{{ $team->name }}</span> ({{ $team->id }})
            </li>
        @empty
            <li class="list-none">
                <span>No teams were found for the authenticated user.</span>
            </li>
        @endforelse
    </ul>
</div>
