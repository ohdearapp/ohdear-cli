---
name: ohdear
description: >-
  Manage Oh Dear website monitoring using the ohdear CLI.
  ALWAYS activate when the user's message contains an ohdear.app URL
  (e.g. https://ohdear.app/monitors/123/check/broken-links/report). Extract the
  monitor ID and check type from the URL and use the CLI to fetch the data.
  Also use when the user wants to check if their site is up, view uptime or downtime,
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

**JSON structure:** `--json` responses are **paginated objects** `{data: [...], links: ...}`, not bare arrays. Always use `.data[]` to access items (e.g. `jq '.data[]'`), never `.[]`.

## Teams

API keys are user-scoped. A user may belong to multiple teams. Monitors have a `team_id` field but **no `team_name`**. To resolve team names to IDs:

```bash
ohdear get-me --json | jq '.teams[] | {id, name}'
```

Then filter monitors by `team_id`. Do NOT use `list-managed-teams` — that's a reseller-only endpoint.

When presenting results to the user, summarize clearly:
- **Monitors**: Table with ID, URL, friendly name, status, checks enabled
- **Uptime**: Percentage uptime and downtime periods with start/end times
- **Broken links**: URLs with HTTP status codes and source page (use `--run-id` with historical run IDs to compare across runs — see workflows)
- **Certificate health**: Issuer, expiration date, and issues found
- **Cron checks**: Name, frequency, last ping time, status
- **Status pages**: Title, URL, associated monitors
- **Lighthouse reports**: Performance, accessibility, best practices, SEO scores

## Documentation

Oh Dear docs are available in clean markdown for easy reading. Append `.md` to any docs URL or request with `Accept: text/markdown`:

```
https://ohdear.app/docs/general/introduction.md
https://ohdear.app/docs/api/monitors.md
```

Use this to look up feature details, API parameters, or setup instructions when helping the user.

## Reference

- **Full command list**: See [references/commands.md](references/commands.md)
- **Step-by-step workflows**: See [references/workflows.md](references/workflows.md)
  - Monitor setup, downtime investigation, maintenance windows
  - Broken link audits, certificate monitoring, status pages
  - Cron checks, Lighthouse reports, application health, tags
