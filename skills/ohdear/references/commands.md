# Oh Dear CLI Command Reference

All API commands are auto-generated from the Oh Dear OpenAPI specification. Run `ohdear list` to see all available commands, and `ohdear <command> --help` for parameters and usage.

Commands accept `--field key=value` for body params and `--option-name=value` for path/query params. Default output is human-readable text; add `--json`, `--yaml`, or `--minify` for machine-readable output.

## Command categories

| Category | Key commands | Description |
|----------|-------------|-------------|
| **Auth & Utility** | `login`, `logout`, `clear-cache`, `install-skill` | API token management and CLI maintenance |
| **User** | `get-me` | Current user info |
| **Monitors** | `list-monitors`, `create-monitor`, `get-monitor`, `get-monitor-by-url`, `update-monitor`, `delete-monitor` | CRUD for monitors |
| **Checks** | `get-check-summary`, `enable-check`, `disable-check`, `request-check-run`, `snooze-check`, `unsnooze-check` | Enable/disable/snooze individual checks on a monitor |
| **Uptime & Downtime** | `get-uptime`, `get-downtime`, `delete-downtime`, `http-uptime-metrics`, `ping-uptime-metrics`, `tcp-uptime-metrics`, `get-public-metrics` | Uptime percentages, downtime periods, metrics by protocol |
| **Check History** | `list-check-runs` | List historical runs for any check type on a monitor (broken links, mixed content, etc.). Use run IDs to fetch results from a specific past run. |
| **Broken Links** | `list-broken-links`, `add-broken-links-whitelist-url` | Find broken links (latest run by default, or pass `--run-id` for a historical run), whitelist known URLs |
| **Crawled URLs** | `get-crawled-urls-summary`, `list-crawled-urls-details` | Summary counts (total/internal/external/by-type) and per-URL details (status code, found-on page, type). **Always start with summary** — details is paginated (100/page) and can be very large. |
| **Mixed Content** | `list-mixed-content` | HTTP resources on HTTPS pages |
| **Certificate Health** | `get-certificate-health`, `list-detected-certificates`, `get-detected-certificate` | SSL/TLS certificate monitoring |
| **DNS & Domain** | `get-dns-history`, `get-dns-history-item`, `get-domain-info` | DNS records and domain registration info |
| **DNS Blocklists** | `list-dns-blocklist-history-items`, `get-dns-blocklist-history-item` | Check if domain is on DNS blocklists |
| **Port Scanning** | `list-ports-history-items`, `get-ports-history-item` | Open port scan results |
| **Sitemap** | `get-sitemap-results` | Sitemap validation results |
| **Maintenance** | `start-maintenance`, `stop-maintenance`, `list-maintenance-periods`, `create-maintenance-period` | Immediate and scheduled maintenance windows (CRUD) |
| **Recurring Maintenance** | `list-recurring-maintenance-periods`, `create-recurring-maintenance-period` | Repeating maintenance schedules (CRUD) |
| **Status Pages** | `list-status-pages`, `create-status-page`, `get-status-page`, `add-status-page-monitors`, `remove-status-page-monitor` | Public status pages with monitor assignments (CRUD) |
| **Status Page Updates** | `list-status-page-updates`, `create-status-page-update`, `update-status-page-update` | Incident updates on status pages (CRUD) |
| **Status Page Templates** | `list-status-page-update-templates`, `create-status-page-update-template` | Reusable templates for status page updates (CRUD) |
| **Cron Checks** | `list-cron-checks`, `create-cron-check`, `sync-cron-checks`, `snooze-cron-check` | Monitor scheduled tasks/cron jobs (CRUD) |
| **Application Health** | `list-application-health-checks`, `get-application-health-check-history`, `snooze-application-health-check` | Laravel/app health check monitoring |
| **Lighthouse** | `list-lighthouse-reports`, `get-latest-lighthouse-report`, `get-lighthouse-report` | Performance, accessibility, SEO scores |
| **AI Responses** | `list-ai-responses`, `get-latest-ai-response`, `get-ai-response` | AI-generated analysis of check results |
| **Tags** | `list-tags`, `create-tag`, `list-tag-groups`, `create-tag-group` | Organize monitors with tags and groups (CRUD) |
| **Notifications** | `list-team-notification-destinations`, `create-team-notification-destination` | Notification destinations at team, monitor, tag, and tag group level (CRUD at each scope — use `ohdear list` for all variants) |
| **Managed Teams** | `list-managed-teams`, `create-managed-team`, `add-user-to-managed-team`, `generate-login-link-for-managed-team-user` | Team management for resellers/agencies (CRUD) |

Categories marked (CRUD) also have `get-*`, `update-*`, `delete-*` variants. Run `ohdear list` to discover all commands.
