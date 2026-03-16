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
  version: "5.1.3"
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

## Command naming

Commands use **kebab-case** names exactly as listed in [references/commands.md](references/commands.md). Do NOT guess command names — always look them up. Common mistakes to avoid:
- ~~`sites:list`~~ → `list-monitors`
- ~~`monitors:get`~~ → `get-monitor`
- ~~`uptime:get`~~ → `get-uptime`

**Always check [references/commands.md](references/commands.md) before running a command.** If unsure, run `ohdear <command> --help` to verify parameters.

## Output

Commands output human-readable text by default. For any task that requires **analysis, comparison, filtering, or counting**, always use `--json` to get structured output you can parse:

```bash
ohdear list-monitors --json           # Get all monitors as JSON
ohdear get-uptime --monitor-id=1 --json  # Get uptime data as JSON
```

Other format options: `--yaml`, `--minify`. Use `-H` to include response headers.

**Note:** `--json` works on API commands (list-*, get-*, etc.), not on utility commands (login, logout, clear-cache).

When presenting results to the user, summarize clearly:
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
