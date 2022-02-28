<div class="ml-2 my-1">
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status Summary</th>
                <th>Sites</th>
            </tr>
        </thead>
        @forelse($statusPages as $statusPage)
            <tr>
                <td>
                    <span>{{ $statusPage->id }}</span>
                </td>
                <td>
                    <span>{{ $statusPage->title }}</span>
                </td>
                <td>
                    <span>{{ $statusPage->attributes['summarized_status'] }}</span>
                </td>
                <td>
                    <span>{{ implode(',', collect($statusPage->attributes['sites'])->map(fn (array $site) => $site['sort_url'])->toArray()) }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td>No sites were found for the authenticated user.</td>
            </tr>
        @endforelse
    </table>
</div>
