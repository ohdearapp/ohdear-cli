<div class="ml-2 my-1">
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>Status Summary</th>
                <th>Last Checked</th>
            </tr>
        </thead>
        @forelse($sites as $site)
            <tr>
                <td>
                    <span>{{ $site->id }}</span>
                </td>
                <td>
                    <a href="{{ $site->url }}">{{ $site->url }}</a>
                </td>
                <td>
                    <span>{{ $site->attributes['summarized_check_result'] }}</span>
                </td>
                <td>
                    <span>{{ $site->attributes['latest_run_date'] }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No sites were found for the authenticated user.</td>
            </tr>
        @endforelse
    </table>
</div>
