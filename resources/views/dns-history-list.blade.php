<div class="ml-2 my-1">
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>Difference Summary</th>
                <th>Created</th>
            </tr>
        </thead>
        @forelse($dnsHistoryItems as $dnsHistoryItem)
            <tr>
                <td>
                    <span>{{ $dnsHistoryItem->id }}</span>
                </td>
                <td>
                    <span>{{ $dnsHistoryItem->diffSummary }}</span>
                </td>
                <td>
                    <span>{{ $dnsHistoryItem->createdAt }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td>No DNS history items were found for the authenticated user.</td>
            </tr>
        @endforelse
    </table>
</div>
