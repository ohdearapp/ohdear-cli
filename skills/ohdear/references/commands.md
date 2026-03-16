# Oh Dear CLI Command Reference

All API commands are auto-generated from the Oh Dear OpenAPI specification. Run `ohdear list` to see all available commands, and `ohdear <command> --help` for parameters and usage.

Commands accept `--field key=value` for body params and `--option-name=value` for path/query params. Default output is human-readable text; use `--json` for JSON or `--yaml` for YAML.

## Command categories

| Category | Key commands | Description |
|----------|-------------|-------------|
| **Auth** | `login`, `logout`, `clear-cache` | API token management |
| **User** | `get-me` | Current user info |
| **Monitors** | `list-monitors`, `create-monitor`, `get-monitor`, `get-monitor-by-url`, `update-monitor`, `delete-monitor` | Full CRUD for monitors |
| **Checks** | `get-check-summary`, `enable-check`, `disable-check`, `request-check-run`, `snooze-check`, `unsnooze-check` | Enable/disable/snooze individual checks on a monitor |
| **Uptime & Downtime** | `get-uptime`, `get-downtime`, `http-uptime-metrics`, `ping-uptime-metrics`, `tcp-uptime-metrics`, `get-public-metrics` | Uptime percentages, downtime periods, metrics by protocol |
| **Broken Links** | `list-broken-links`, `add-broken-links-whitelist-url` | Find broken links, whitelist known URLs |
| **Mixed Content** | `list-mixed-content` | HTTP resources on HTTPS pages |
| **Certificate Health** | `get-certificate-health`, `list-detected-certificates`, `get-detected-certificate` | SSL/TLS certificate monitoring |
| **DNS & Domain** | `get-dns-history`, `get-dns-history-item`, `get-domain-info` | DNS records and domain registration info |
| **DNS Blocklists** | `list-dns-blocklist-history-items`, `get-dns-blocklist-history-item` | Check if domain is on DNS blocklists |
| **Port Scanning** | `list-ports-history-items`, `get-ports-history-item` | Open port scan results |
| **Sitemap** | `get-sitemap-results` | Sitemap validation results |
| **Maintenance** | `start-maintenance`, `stop-maintenance`, `create-maintenance-period`, `list-maintenance-periods` | Immediate and scheduled maintenance windows |
| **Recurring Maintenance** | `list-recurring-maintenance-periods`, `create-recurring-maintenance-period` | Repeating maintenance schedules (full CRUD) |
| **Status Pages** | `list-status-pages`, `create-status-page`, `add-status-page-monitors` | Public status pages with monitor assignments |
| **Status Page Updates** | `list-status-page-updates`, `create-status-page-update` | Incident updates on status pages |
| **Status Page Templates** | `list-status-page-update-templates`, `create-status-page-update-template` | Reusable templates for status page updates |
| **Cron Checks** | `list-cron-checks`, `create-cron-check`, `sync-cron-checks`, `snooze-cron-check` | Monitor scheduled tasks/cron jobs |
| **Application Health** | `list-application-health-checks`, `get-application-health-check-history`, `snooze-application-health-check` | Laravel/app health check monitoring |
| **Lighthouse** | `list-lighthouse-reports`, `get-latest-lighthouse-report`, `get-lighthouse-report` | Performance, accessibility, SEO scores |
| **AI Responses** | `list-ai-responses`, `get-latest-ai-response`, `get-ai-response` | AI-generated analysis of check results |
| **Tags** | `list-tags`, `create-tag`, `list-tag-groups`, `create-tag-group` | Organize monitors with tags and groups |
| **Notifications** | `list-team-notification-destinations`, `create-team-notification-destination` | Notification destinations at team, monitor, tag, and tag group level (full CRUD at each level) |
| **Managed Teams** | `list-managed-teams`, `create-managed-team`, `add-user-to-managed-team`, `generate-login-link-for-managed-team-user` | Team management for resellers/agencies |

Most categories follow standard CRUD patterns: `list-*`, `create-*`, `get-*`, `update-*`, `delete-*`. If a command isn't listed above, run `ohdear list` to discover it.
