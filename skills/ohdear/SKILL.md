---
name: ohdear
description: >-
  Manage Oh Dear website monitoring using the ohdear CLI.
  Use when the user wants to list, add, or manage monitors; check uptime and
  downtime; view broken links, mixed content, or certificate health; manage
  maintenance periods and status pages; configure cron checks; view DNS history;
  check application health; view Lighthouse reports; manage tags; or interact
  with ohdear.app from the command line.
license: MIT
metadata:
  author: ohdearapp
  version: "5.0.0"
---

# Oh Dear CLI

The `ohdear` CLI lets you manage [Oh Dear](https://ohdear.app) website monitoring from the terminal. Every Oh Dear API endpoint has a corresponding command.

## Prerequisites

Check that the CLI is installed:

```bash
ohdear --version
```

If not installed:

```bash
composer global require ohdearapp/ohdear-cli
```

Ensure Composer's global bin directory is in `PATH`:

```bash
composer global config bin-dir --absolute
```

## Authentication

```bash
# Log in (you'll be prompted for your API token)
ohdear login

# Log out
ohdear logout
```

Get your API token at https://ohdear.app/user-settings/api.

If any command returns a 401 error, the token is invalid or expired. Run `ohdear login` again.

## Quick command reference

All commands output JSON. See [references/commands.md](references/commands.md) for full parameter details.

### User

```bash
# Who am I?
ohdear get-me
```

### Monitors

```bash
# List all monitors
ohdear list-monitors

# Get a specific monitor
ohdear get-monitor --monitor-id=123

# Add a new monitor
ohdear create-monitor --field url="https://example.com" --field team_id=1

# Update a monitor
ohdear update-monitor --monitor-id=123 --field friendly_name="My Site"

# Delete a monitor
ohdear delete-monitor --monitor-id=123
```

### Checks

```bash
# Get check summary for a monitor
ohdear get-check-summary --monitor-id=123

# Enable/disable a check
ohdear enable-check --check-id=456
ohdear disable-check --check-id=456

# Request a check run
ohdear request-check-run --check-id=456

# Snooze/unsnooze a check
ohdear snooze-check --check-id=456 --field minutes=60
ohdear unsnooze-check --check-id=456
```

### Uptime and downtime

```bash
# Get uptime data
ohdear get-uptime --monitor-id=123

# Get downtime data
ohdear get-downtime --monitor-id=123

# Delete a downtime record
ohdear delete-downtime --downtime-id=789

# Get uptime metrics
ohdear http-uptime-metrics --monitor-id=123
ohdear ping-uptime-metrics --monitor-id=123
ohdear tcp-uptime-metrics --monitor-id=123
```

### Broken links and mixed content

```bash
# List broken links for a monitor
ohdear list-broken-links --monitor-id=123

# Add a broken link whitelist URL
ohdear add-broken-links-whitelist-url --monitor-id=123 --field url="https://example.com/old"

# List mixed content
ohdear list-mixed-content --monitor-id=123
```

### Certificate health

```bash
# Get certificate health
ohdear get-certificate-health --monitor-id=123

# List detected certificates
ohdear list-detected-certificates --monitor-id=123

# Get a specific detected certificate
ohdear get-detected-certificate --detected-certificate-id=456
```

### Maintenance periods

```bash
# List maintenance periods
ohdear list-maintenance-periods --monitor-id=123

# Start/stop maintenance
ohdear start-maintenance --monitor-id=123
ohdear stop-maintenance --monitor-id=123

# Create a scheduled maintenance period
ohdear create-maintenance-period --monitor-id=123 --field start_date="2025-01-01 00:00:00" --field end_date="2025-01-01 06:00:00"

# Delete a maintenance period
ohdear delete-maintenance-period --maintenance-period-id=789
```

### Status pages

```bash
# List status pages
ohdear list-status-pages

# Create a status page
ohdear create-status-page --field title="Status" --field team_id=1

# Get a specific status page
ohdear get-status-page --status-page-id=123

# Delete a status page
ohdear delete-status-page --status-page-id=123

# Add/remove monitors from a status page
ohdear add-status-page-monitors --status-page-id=123 --field monitor_ids="[1,2,3]"
ohdear remove-status-page-monitor --status-page-id=123 --monitor-id=456
```

### Status page updates

```bash
# List updates for a status page
ohdear list-status-page-updates --status-page-id=123

# Create a status page update
ohdear create-status-page-update --status-page-id=123 --field title="Investigating issue" --field text="We are investigating."

# Update an existing update
ohdear update-status-page-update --status-page-update-id=456 --field title="Resolved"

# Delete a status page update
ohdear delete-status-page-update --status-page-update-id=456
```

### Cron checks

```bash
# List cron checks for a monitor
ohdear list-cron-checks --monitor-id=123

# Create a cron check
ohdear create-cron-check --monitor-id=123 --field name="Daily Backup" --field frequency_in_minutes=1440

# Update/delete a cron check
ohdear update-cron-check --cron-check-id=456 --field name="Updated Check"
ohdear delete-cron-check --cron-check-id=456
```

### DNS and domain info

```bash
# Get DNS history for a monitor
ohdear get-dns-history --monitor-id=123

# Get domain info for a monitor
ohdear get-domain-info --monitor-id=123
```

### Application health

```bash
# List application health checks
ohdear list-application-health-checks --monitor-id=123

# Get application health check history
ohdear get-application-health-check-history --application-health-check-id=456

# Snooze/unsnooze an application health check
ohdear snooze-application-health-check --application-health-check-id=456
ohdear unsnooze-application-health-check --application-health-check-id=456
```

### Lighthouse reports

```bash
# List Lighthouse reports for a monitor
ohdear list-lighthouse-reports --monitor-id=123

# Get the latest Lighthouse report
ohdear get-latest-lighthouse-report --monitor-id=123

# Get a specific Lighthouse report
ohdear get-lighthouse-report --lighthouse-report-id=456
```

### AI responses

```bash
# List AI responses for a monitor
ohdear list-ai-responses --monitor-id=123

# Get the latest AI response
ohdear get-latest-ai-response --monitor-id=123

# Get a specific AI response
ohdear get-ai-response --ai-response-id=456
```

### Tags

```bash
# List all tags
ohdear list-tags

# Create a tag
ohdear create-tag --field name="production"

# List tag groups
ohdear list-tag-groups

# Create/update/delete a tag group
ohdear create-tag-group --field name="Environments"
ohdear update-tag-group --tag-group-id=123 --field name="Updated Group"
ohdear delete-tag-group --tag-group-id=123
```

### Notification destinations

```bash
# List notification destinations for a team
ohdear list-team-notification-destinations --team-id=1

# Create a notification destination
ohdear create-team-notification-destination --team-id=1 --field type="slack" --field label="Slack alerts"
```

## Common workflows

See [references/workflows.md](references/workflows.md) for detailed workflow guides.

## Output format

All commands return JSON. When presenting results to the user:

- **Monitors**: Show as a table with columns: ID, URL, friendly name, status, checks enabled.
- **Uptime**: Show percentage uptime and any downtime periods with start/end times.
- **Broken links**: List the broken URLs with their HTTP status codes and the page they were found on.
- **Certificate health**: Show certificate issuer, expiration date, and any issues found.
- **Cron checks**: Show name, frequency, last ping time, and status.
- **Status pages**: Show title, URL, and associated monitors.
- **Lighthouse reports**: Show performance, accessibility, best practices, and SEO scores.
