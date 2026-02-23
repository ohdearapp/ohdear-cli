# Oh Dear CLI Command Reference

All commands are auto-generated from the Oh Dear OpenAPI specification. They accept `--field key=value` for request body parameters and `--option-name=value` for path/query parameters. All commands output JSON.

## Authentication

| Command | Description |
|---------|-------------|
| `login` | Store your Oh Dear API token |
| `logout` | Clear stored credentials |
| `clear-cache` | Clear cached OpenAPI spec and temp files |
| `install-skill` | Install the Oh Dear agent skill |

## User

| Command | Description |
|---------|-------------|
| `get-me` | Get the authenticated user |

## Monitors

| Command | Description |
|---------|-------------|
| `list-monitors` | List all monitors |
| `create-monitor` | Create a new monitor |
| `get-monitor` | Get a specific monitor |
| `update-monitor` | Update a monitor |
| `delete-monitor` | Delete a monitor |

## Checks

| Command | Description |
|---------|-------------|
| `get-check-summary` | Get check summary for a monitor |
| `enable-check` | Enable a check |
| `disable-check` | Disable a check |
| `request-check-run` | Request a manual check run |
| `snooze-check` | Snooze a check |
| `unsnooze-check` | Unsnooze a check |

## Uptime and Downtime

| Command | Description |
|---------|-------------|
| `get-uptime` | Get uptime data for a monitor |
| `get-downtime` | Get downtime data for a monitor |
| `delete-downtime` | Delete a downtime record |
| `http-uptime-metrics` | Get HTTP uptime metrics |
| `ping-uptime-metrics` | Get ping uptime metrics |
| `tcp-uptime-metrics` | Get TCP uptime metrics |

## Broken Links and Mixed Content

| Command | Description |
|---------|-------------|
| `list-broken-links` | List broken links for a monitor |
| `add-broken-links-whitelist-url` | Whitelist a broken link URL |
| `list-mixed-content` | List mixed content for a monitor |

## Certificate Health

| Command | Description |
|---------|-------------|
| `get-certificate-health` | Get certificate health for a monitor |
| `list-detected-certificates` | List detected certificates |
| `get-detected-certificate` | Get a specific detected certificate |

## Maintenance Periods

| Command | Description |
|---------|-------------|
| `list-maintenance-periods` | List maintenance periods for a monitor |
| `start-maintenance` | Start maintenance for a monitor |
| `stop-maintenance` | Stop maintenance for a monitor |
| `create-maintenance-period` | Create a scheduled maintenance period |
| `update-maintenance-period` | Update a maintenance period |
| `delete-maintenance-period` | Delete a maintenance period |

## Status Pages

| Command | Description |
|---------|-------------|
| `list-status-pages` | List all status pages |
| `create-status-page` | Create a status page |
| `get-status-page` | Get a specific status page |
| `delete-status-page` | Delete a status page |
| `add-status-page-monitors` | Add monitors to a status page |
| `remove-status-page-monitor` | Remove a monitor from a status page |

## Status Page Updates

| Command | Description |
|---------|-------------|
| `list-status-page-updates` | List updates for a status page |
| `create-status-page-update` | Create a status page update |
| `update-status-page-update` | Update a status page update |
| `delete-status-page-update` | Delete a status page update |

## Cron Checks

| Command | Description |
|---------|-------------|
| `list-cron-checks` | List cron checks for a monitor |
| `create-cron-check` | Create a cron check |
| `sync-cron-checks` | Sync cron checks for a monitor |
| `update-cron-check` | Update a cron check |
| `delete-cron-check` | Delete a cron check |

## DNS and Domain

| Command | Description |
|---------|-------------|
| `get-dns-history` | Get DNS history for a monitor |
| `get-domain-info` | Get domain info for a monitor |

## Application Health

| Command | Description |
|---------|-------------|
| `list-application-health-checks` | List application health checks |
| `get-application-health-check-history` | Get health check history |
| `snooze-application-health-check` | Snooze an application health check |
| `unsnooze-application-health-check` | Unsnooze an application health check |

## Lighthouse Reports

| Command | Description |
|---------|-------------|
| `list-lighthouse-reports` | List Lighthouse reports |
| `get-latest-lighthouse-report` | Get the latest Lighthouse report |
| `get-lighthouse-report` | Get a specific Lighthouse report |

## AI Responses

| Command | Description |
|---------|-------------|
| `list-ai-responses` | List AI responses for a monitor |
| `get-latest-ai-response` | Get the latest AI response |
| `get-ai-response` | Get a specific AI response |

## Tags

| Command | Description |
|---------|-------------|
| `list-tags` | List all tags |
| `create-tag` | Create a tag |
| `list-tag-groups` | List tag groups |
| `create-tag-group` | Create a tag group |
| `update-tag-group` | Update a tag group |
| `delete-tag-group` | Delete a tag group |

## Notification Destinations

| Command | Description |
|---------|-------------|
| `list-team-notification-destinations` | List notification destinations for a team |
| `create-team-notification-destination` | Create a notification destination |

## Cron Check Snoozing

| Command | Description |
|---------|-------------|
| `snooze-cron-check` | Snooze a cron check |
| `unsnooze-cron-check` | Unsnooze a cron check |
