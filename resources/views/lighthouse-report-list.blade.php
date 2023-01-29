<x-layouts.app>
    <table style="box">
        <thead>
            <tr>
                <th>ID</th>
                <th>P</th>
                <th>A</th>
                <th>BP</th>
                <th>SEO</th>
                <th>PWA</th>
                <th>Created</th>
            </tr>
        </thead>
        @forelse($lighthouseReports as $lighthouseReport)
            <tr>
                <td>
                    <span>{{ $lighthouseReport->id }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->performanceScore }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->accessibilityScore }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->bestPracticesScore }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->seoScore }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->progressiveWebAppScore }}</span>
                </td>
                <td>
                    <span>{{ $lighthouseReport->createdAt }}</span>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Lighthouse reports were found for the authenticated user.</td>
            </tr>
        @endforelse
    </table>
</x-layouts.app>
