# Oh Dear CLI Workflows

Common workflows for managing website monitoring with the Oh Dear CLI.

## Comparing monitors (slowest, fastest, most downtime, etc.)

Answer questions like "which site is slowest?", "which has the most downtime?", or "compare performance across sites".

### 1. Get all monitors as JSON

```bash
ohdear list-monitors --json
```

### 2. Get performance data per monitor

For response time / speed comparisons, get uptime metrics for each monitor:

```bash
ohdear http-uptime-metrics --monitor-id=<id> --json
```

For downtime comparisons:

```bash
ohdear get-downtime --monitor-id=<id> --json
```

For Lighthouse performance scores:

```bash
ohdear get-latest-lighthouse-report --monitor-id=<id> --json
```

### 3. Compare and summarize

Parse the JSON results to rank monitors by the relevant metric (response time, downtime duration, Lighthouse score, etc.) and present a summary table to the user.

## Monitor setup

Set up monitoring for a new site.

### 1. Authenticate

```bash
ohdear login
```

### 2. Create a monitor

```bash
ohdear create-monitor --field url="https://example.com" --field team_id=1
```

### 3. Verify the monitor was created

```bash
ohdear list-monitors
```

### 4. Check which checks are enabled

```bash
ohdear get-check-summary --monitor-id=<id>
```

### 5. Enable additional checks if needed

```bash
ohdear enable-check --check-id=<id>
```

## Downtime investigation

Investigate why a site went down and review downtime history.

### 1. Check the monitor status

```bash
ohdear get-monitor --monitor-id=<id>
```

### 2. Get downtime records

```bash
ohdear get-downtime --monitor-id=<id>
```

### 3. Get uptime metrics for context

```bash
ohdear http-uptime-metrics --monitor-id=<id>
```

### 4. Check certificate health (SSL issues can cause downtime)

```bash
ohdear get-certificate-health --monitor-id=<id>
```

### 5. Check DNS history (DNS changes can cause outages)

```bash
ohdear get-dns-history --monitor-id=<id>
```

## Maintenance window management

Schedule and manage maintenance windows to avoid false alerts.

### 1. Start immediate maintenance

```bash
ohdear start-maintenance --monitor-id=<id>
```

### 2. Or schedule a future maintenance window

```bash
ohdear create-maintenance-period --monitor-id=<id> \
  --field start_date="2026-07-01 02:00:00" \
  --field end_date="2026-07-01 06:00:00"
```

### 3. List current maintenance periods

```bash
ohdear list-maintenance-periods --monitor-id=<id>
```

### 4. Stop maintenance early

```bash
ohdear stop-maintenance --monitor-id=<id>
```

### 5. Clean up old maintenance periods

```bash
ohdear delete-maintenance-period --maintenance-period-id=<id>
```

## Broken link audit

Find and fix broken links on your site.

### 1. List broken links

```bash
ohdear list-broken-links --monitor-id=<id>
```

This returns results from the **latest completed run** by default.

### 2. Review the broken URLs and their status codes

Look at the response. Each broken link shows the URL, the page it was found on, and the HTTP status code.

### 3. Whitelist known acceptable broken links

```bash
ohdear add-broken-links-whitelist-url --monitor-id=<id> --field url="https://example.com/known-404"
```

### 4. Also check for mixed content

```bash
ohdear list-mixed-content --monitor-id=<id>
```

## Comparing historical check results

Compare results across runs — e.g. "compare broken links from last week to this week", "did the mixed content issues get fixed?", or "show me the trend".

Works for any check type that supports historical runs: `broken_links`, `mixed_content`, `certificate_health`, `sitemap`, etc.

### 1. List historical runs for a check type

```bash
ohdear list-check-runs --monitor-id=<id> --check-type=broken_links --json
```

Each run has an `id`, `result` (succeeded/warning/failed), `started_at`, and `ended_at`. Runs are kept for approximately 10 days.

Use filters to narrow down:

```bash
# Only runs from last week
ohdear list-check-runs --monitor-id=<id> --check-type=broken_links \
  --filter-started-after=20260313000000 --filter-started-before=20260320000000 --json

# Only failed runs
ohdear list-check-runs --monitor-id=<id> --check-type=broken_links --filter-result=failed --json
```

### 2. Fetch results from specific runs

Use `--run-id` to get results from a specific historical run instead of the latest:

```bash
# Get broken links from a specific past run
ohdear list-broken-links --monitor-id=<id> --run-id=98765 --json

# Get broken links from another run to compare
ohdear list-broken-links --monitor-id=<id> --run-id=98710 --json
```

The same `--run-id` parameter works on `list-mixed-content`, `get-certificate-health`, and `get-sitemap-results`.

### 3. Compare and summarize

Parse the JSON results from both runs and compare:
- **New issues**: URLs broken in the newer run but not the older one
- **Fixed issues**: URLs broken in the older run but not the newer one
- **Persistent issues**: URLs broken in both runs

Present a clear summary table showing what changed between the two runs.

## Crawled URLs investigation

Investigate what URLs Oh Dear's crawler found on a site — useful for understanding site structure, finding non-200 responses, or analyzing URL types.

**Important:** The details endpoint returns up to 100 items per page and can contain 1000+ URLs. Always start with the summary to understand the scope, then use `jq` to filter details rather than reading raw JSON.

### 1. Get the summary first

```bash
ohdear get-crawled-urls-summary --monitor-id=<id> --json
```

This returns a small payload with totals and breakdown by type:

```json
{
  "data": {
    "total": 1042,
    "internal": 1042,
    "external": 0,
    "by_type": { "image": 622, "link": 355, "og:image": 46, "script": 13, "stylesheet": 6 }
  },
  "meta": { "run_id": 12345, "run_started_at": "...", "run_ended_at": "..." }
}
```

### 2. Filter details with jq — never dump raw

The details endpoint is paginated (100/page). Always pipe through `jq` to extract only what you need:

```bash
# Count non-200 status codes
ohdear list-crawled-urls-details --monitor-id=<id> --json | jq '[.data[] | select(.status_code != 200)] | length'

# List only broken URLs (4xx/5xx)
ohdear list-crawled-urls-details --monitor-id=<id> --json | jq '.data[] | select(.status_code >= 400) | {status_code, crawled_url, found_on_url}'

# List only external URLs
ohdear list-crawled-urls-details --monitor-id=<id> --json | jq '.data[] | select(.internal == false) | {crawled_url, status_code}'

# Filter by type (link, image, script, stylesheet, og:image)
ohdear list-crawled-urls-details --monitor-id=<id> --json | jq '.data[] | select(.type == "link") | {crawled_url, status_code}'

# Get URLs with errors
ohdear list-crawled-urls-details --monitor-id=<id> --json | jq '.data[] | select(.error_message != null) | {crawled_url, error_message}'
```

### 3. Paginate for large sites

If the summary shows more than 100 URLs, use `--page` to fetch subsequent pages:

```bash
ohdear list-crawled-urls-details --monitor-id=<id> --page=2 --json | jq '.data[] | select(.status_code >= 400)'
```

### 4. Compare across runs

Both endpoints support `--run-id` to fetch results from a historical run:

```bash
# Get historical run IDs
ohdear list-check-runs --monitor-id=<id> --check-type=broken_links --json

# Compare summary between two runs
ohdear get-crawled-urls-summary --monitor-id=<id> --run-id=<old_run_id> --json
ohdear get-crawled-urls-summary --monitor-id=<id> --run-id=<new_run_id> --json
```

## Certificate monitoring

Monitor SSL/TLS certificates to prevent expiration issues.

### 1. Check certificate health

```bash
ohdear get-certificate-health --monitor-id=<id>
```

### 2. List all detected certificates

```bash
ohdear list-detected-certificates --monitor-id=<id>
```

### 3. Get details on a specific certificate

```bash
ohdear get-detected-certificate --detected-certificate-id=<id>
```

## Status page management

Create and maintain a public status page.

### 1. Create a status page

```bash
ohdear create-status-page --field title="Service Status" --field team_id=1
```

### 2. Add monitors to the status page

```bash
ohdear add-status-page-monitors --status-page-id=<id> --field monitor_ids="[1,2,3]"
```

### 3. Post an incident update

```bash
ohdear create-status-page-update --status-page-id=<id> \
  --field title="Investigating connectivity issues" \
  --field text="We are investigating reports of intermittent connectivity issues." \
  --field severity="warning"
```

### 4. Update the incident

```bash
ohdear update-status-page-update --status-page-update-id=<id> \
  --field title="Resolved: Connectivity issues" \
  --field text="The connectivity issues have been resolved."
```

### 5. Clean up old updates

```bash
ohdear delete-status-page-update --status-page-update-id=<id>
```

## Cron check setup

Set up monitoring for scheduled tasks.

### 1. List existing cron checks

```bash
ohdear list-cron-checks --monitor-id=<id>
```

### 2. Create a new cron check

```bash
ohdear create-cron-check --monitor-id=<id> \
  --field name="Daily Backup" \
  --field frequency_in_minutes=1440
```

### 3. Update check parameters

```bash
ohdear update-cron-check --cron-check-id=<id> \
  --field grace_time_in_minutes=15
```

### 4. Temporarily snooze a cron check

```bash
ohdear snooze-cron-check --cron-check-id=<id>
```

### 5. Unsnooze when ready

```bash
ohdear unsnooze-cron-check --cron-check-id=<id>
```

## Performance review with Lighthouse

Review site performance using Lighthouse reports.

### 1. Get the latest Lighthouse report

```bash
ohdear get-latest-lighthouse-report --monitor-id=<id>
```

### 2. List historical Lighthouse reports

```bash
ohdear list-lighthouse-reports --monitor-id=<id>
```

### 3. Compare a specific historical report

```bash
ohdear get-lighthouse-report --lighthouse-report-id=<id>
```

## Application health monitoring

Monitor the health of your Laravel application.

### 1. List application health checks

```bash
ohdear list-application-health-checks --monitor-id=<id>
```

### 2. View history for a specific check

```bash
ohdear get-application-health-check-history --application-health-check-id=<id>
```

### 3. Snooze a noisy health check temporarily

```bash
ohdear snooze-application-health-check --application-health-check-id=<id>
```

### 4. Unsnooze when the issue is fixed

```bash
ohdear unsnooze-application-health-check --application-health-check-id=<id>
```

## Tag management

Organize monitors with tags and tag groups.

### 1. List existing tags

```bash
ohdear list-tags
```

### 2. Create tags for categorization

```bash
ohdear create-tag --field name="production"
ohdear create-tag --field name="staging"
```

### 3. Organize tags into groups

```bash
ohdear create-tag-group --field name="Environments"
```

### 4. Update or clean up tag groups

```bash
ohdear update-tag-group --tag-group-id=<id> --field name="Updated Group"
ohdear delete-tag-group --tag-group-id=<id>
```
