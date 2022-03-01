<div class="ml-2 my-1">
    <table style="box">
        <thead>
        <tr>
            <th>Total (ms)</th>
            <th>DNS (ms)</th>
            <th>Remote Server (ms)</th>
            <th>Download (ms)</th>
            <th>Created</th>
        </tr>
        </thead>
        @forelse($performances as $performance)
            <tr>
                <td>
                    <span>{{ $performance->totalTimeInSeconds * 1000 }}</span>
                </td>
                <td>
                    <span>{{ $performance->dnsTimeInSeconds * 1000 }}</span>
                </td>
                <td>
                    <span>{{ $performance->remoteServerProcessingTimeInSeconds * 1000 }}</span>
                </td>
                <td>
                    <span>{{ round($performance->downloadTimeInSeconds * 1000, 5) }}</span>
                </td>
                <td>
                    <span>{{ $performance->createdAt }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No performance data was found for the specified site.</td>
            </tr>
        @endforelse
    </table>
</div>
