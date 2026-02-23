# Oh Dear CLI Workflows

Common workflows for managing website monitoring with the Oh Dear CLI.

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
  --field start_date="2025-06-01 02:00:00" \
  --field end_date="2025-06-01 06:00:00"
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
