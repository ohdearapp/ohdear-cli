<x-layouts.app>
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Severity</th>
                <th>Text</th>
                <th>Pinned</th>
                <th>Time</th>
            </tr>
        </thead>
        @forelse($statusPageUpdates as $statusPageUpdate)
            <tr>
                <td>
                    <span>{{ $statusPageUpdate->id }}</span>
                </td>
                <td>
                    <span>{{ $statusPageUpdate->title }}</span>
                </td>
                <td>
                    <span>{{ $statusPageUpdate->severity }}</span>
                </td>
                <td>
                    <span>{{ $statusPageUpdate->text }}</span>
                </td>
                <td>
                    <span>{{ $statusPageUpdate->pinned ? 'Yes' : 'No' }}</span>
                </td>
                <td>
                    <span>{{ $statusPageUpdate->time }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No updates were found for the specified status page.</td>
            </tr>
        @endforelse
    </table>
</x-layouts.app>
