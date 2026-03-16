---
name: ohdear
description: >-
  Manage Oh Dear website monitoring using the ohdear CLI.
  Use when the user wants to check if their site is up, view uptime or downtime,
  list or manage monitors, view broken links, mixed content, or certificate health,
  manage maintenance periods or status pages, configure cron checks, view DNS
  history or DNS blocklists, check port scan results, view sitemap checks,
  check application health, view Lighthouse performance reports, manage tags,
  manage notification destinations, manage teams, or interact with ohdear.app
  in any way.
license: MIT
metadata:
  author: ohdearapp
  version: "5.0.0"
---

# Oh Dear CLI

The `ohdear` CLI manages [Oh Dear](https://ohdear.app) website monitoring from the terminal. Every Oh Dear API endpoint has a corresponding command.

## Prerequisites

```bash
ohdear --version  # Check if installed
composer global require ohdearapp/ohdear-cli  # Install if needed
```

## Authentication

```bash
ohdear login   # Prompted for API token (get it at https://ohdear.app/user-settings/api)
ohdear logout  # Clear credentials
```

If any command returns 401, run `ohdear login` again.

## Discovering commands

```bash
ohdear list              # List all available commands
ohdear <command> --help  # Get help for a specific command
```

Commands accept `--field key=value` for body params and `--option-name=value` for path/query params.

## Output format

By default, commands output human-readable formatted text. Use these flags to change the format:

| Flag | Output |
|------|--------|
| *(default)* | Human-readable tables and lists |
| `--json` | Pretty-printed JSON |
| `--yaml` | YAML |
| `--minify` | Compact JSON (no pretty-printing) |
| `-H, --headers` | Include response headers |

When presenting results to the user, summarize the human-readable output clearly:
- **Monitors**: Table with ID, URL, friendly name, status, checks enabled
- **Uptime**: Percentage uptime and downtime periods with start/end times
- **Broken links**: URLs with HTTP status codes and source page
- **Certificate health**: Issuer, expiration date, and issues found
- **Cron checks**: Name, frequency, last ping time, status
- **Status pages**: Title, URL, associated monitors
- **Lighthouse reports**: Performance, accessibility, best practices, SEO scores

## Reference

- **Full command list**: See [references/commands.md](references/commands.md)
- **Step-by-step workflows**: See [references/workflows.md](references/workflows.md)
  - Monitor setup, downtime investigation, maintenance windows
  - Broken link audits, certificate monitoring, status pages
  - Cron checks, Lighthouse reports, application health, tags
