<x-layouts.app>
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Enabled</th>
            </tr>
        </thead>
        @forelse($checks as $check)
            <tr>
                <td>
                    <span>{{ $check->id }}</span>
                </td>
                <td>
                    <span>{{ $check->label }}</span>
                </td>
                <td>
                    <span>{{ $check->type }}</span>
                </td>
                <td>
                    <span>{{ $check->enabled ? 'Yes' : 'No' }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No checks were found for the specified site.</td>
            </tr>
        @endforelse
    </table>
</x-layouts.app>
