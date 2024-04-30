<p align="center">
    <img src="docs/example.png" width="100%">
</p>

<p align="center">
  <a href="https://github.com/ohdearapp/ohdear-cli/actions/workflows/static.yml"><img src="https://img.shields.io/github/actions/workflow/status/ohdearapp/ohdear-cli/static.yml?style=flat-square&label=static%20analysis" alt="Static Analysis status"/></a>
    <a href="https://packagist.org/packages/ohdearapp/ohdear-cli"><img src="https://img.shields.io/packagist/v/ohdearapp/ohdear-cli.svg?style=flat-square&label=stable" alt="Latest Stable Version"/></a>
  <a href="https://packagist.org/packages/ohdearapp/ohdear-cli"><img src="https://img.shields.io/packagist/l/ohdearapp/ohdear-cli.svg?style=flat-square" alt="License"/></a>
</p>

## About Oh Dear CLI

Oh Dear CLI was created by [Nuno Maduro](https://github.com/nunomaduro) and [Owen Voke](https://github.com/owenvoke), and is an Oh Dear CLI tool written in PHP with Laravel Zero.

## Install

> **Requires [PHP 8.2+](https://php.net/releases)**

Via Composer

```shell
composer global require ohdearapp/ohdear-cli
```

Via [Docker](https://docker.com)

```shell
docker run --rm ghcr.io/ohdearapp/ohdear-cli:latest
```

Via [Homebrew](https://formulae.brew.sh/formula/ohdear-cli)

```shell
brew install ohdear-cli
```

If Brew can't find the formula, try running `brew update`.

Once the Oh Dear CLI is installed, set your API key in the `OHDEAR_API_TOKEN` environment variable, you can generate one from [the API access page](https://ohdear.app/user/api-tokens).

## Usage

```shell
ohdear list
```

### Available commands

#### Account

- `ohdear me`  
  Display details about the currently authenticated user

#### Application Health Monitoring

- `ohdear application-health:show [id]`   
  Display application health for a specific site

#### Broken Links

- `ohdear broken-link:show [site-id]`  
  Display broken links for a specific site

#### Certificate Health

- `ohdear certificate-health:show [site-id] [--checks] [--issuers]`  
  Display certificate health for a specific site (use `--checks` or `--issuers` for additional information)

#### Checks

- `ohdear check:disable [id]`  
  Disable a specific check
- `ohdear check:enable [id]`  
  Enable a specific check
- `ohdear check:request-run [id]`  
  Request a new run for a specific check
- `ohdear check:show [site-id]`  
  Display checks for a specific site

#### Cron Job Monitoring

- `ohdear cron-check:add [site-id] [name] [frequency-or-expression] [--grace-time=5] [--description=] [--timezone=UTC]`  
  Add a new cron check for a site
- `ohdear cron-check:delete [id]`  
  Delete a cron check
- `ohdear cron-check:show [site-id]`  
  Display the cron checks for a specific site

#### DNS Monitoring

- `ohdear dns-history:list [site-id]`  
  Display a list of DNS history items and their summary
- `ohdear dns-history:show [site-id] [id]`  
  Display details about a specific DNS history item

#### Lighthouse SEO Reports

- `ohdear lighthouse-report:list [site-id]`  
  Display a list of Lighthouse reports and their summary
- `ohdear lighthouse-report:show [site-id]`  
  Display details about the latest Lighthouse report
- `ohdear lighthouse-report:show [site-id] [id]`  
  Display details about a specific Lighthouse report

#### Maintenance Windows

- `ohdear maintenance-period:add [site-id] [start-date] [end-date]`  
  Add a new maintenance period for a site
- `ohdear maintenance-period:delete [id]`  
  Delete a maintenance period
- `ohdear maintenance-period:show [id]`  
  Display maintenance periods for a specific site
- `ohdear maintenance-period:start [site-id] [seconds]`  
  Start a new maintenance period for a site
- `ohdear maintenance-period:stop [site-id]`  
  Stop the currently active maintenance period for a site

#### Mixed Content

- `ohdear mixed-content:show [site-id]`  
  Display mixed content for a specific site

#### Performance

- `ohdear performance:show [id] [start-date?] [end-date?] [--limit=5] [--timeframe=1h]`  
  Display performance details for a specific site

#### Sites

- `ohdear sites:add [url]`  
  Add a new site to Oh Dear
- `ohdear sites:list`  
  Display a list of sites and their current status
- `ohdear sites:show [id]`  
  Display details about a specific site

#### Status Pages

- `ohdear status-pages:list`  
  Display a list of status pages and their current status
- `ohdear status-pages:show [id]`  
  Display details about a specific status page
- `ohdear status-page-updates:add [status-page-id] [title] [text] [--severity=info] [--pinned] [--time=]`  
  Add a new update for a status page
- `ohdear status-page-updates:list [status-page-id]`  
  Display updates for a status page
- `ohdear status-page-updates:delete [id]`  
  Delete a status page update

#### Uptime

- `ohdear uptime:show [site-id] [start-date?] [end-date?] [--limit=10] [--timeframe=hour]`  
  Display the uptime for a specific site
- `ohdear downtime:show [site-id] [start-date?] [end-date?] [--limit=10]`  
  Display the downtime for a specific site

## Contributing

Thank you for considering contributing to Oh Dear CLI. All contributions are welcome via pull requests.

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes.

## License

Oh Dear CLI is an open-sourced software licensed under the [MIT license](LICENSE.md).
