<p align="center">
    <img src="docs/example.png" width="100%">
</p>

<p align="center">
  <a href="https://styleci.io/repos/121807251"><img src="https://styleci.io/repos/121807251/shield" alt="StyleCI Status"/></a>
  <a href="https://packagist.org/packages/ohdearapp/ohdear-cli"><img src="https://img.shields.io/packagist/v/ohdearapp/ohdear-cli.svg?style=flat-square&label=stable" alt="Latest Stable Version"/></a>
  <a href="https://packagist.org/packages/ohdearapp/ohdear-cli"><img src="https://img.shields.io/packagist/l/ohdearapp/ohdear-cli.svg?style=flat-square" alt="License"/></a>
</p>

## About Oh Dear CLI

Oh Dear CLI was created by [Nuno Maduro](https://github.com/nunomaduro), is maintained by [Owen Voke](https://github.com/owenvoke), and is an Oh Dear CLI tool written in PHP with Laravel Zero.

## Install

> **Requires [PHP 8.0+](https://php.net/releases)**

Via Composer

```bash
composer global require ohdearapp/ohdear-cli
```

Then set your API key in the `OHDEAR_API_TOKEN` environment variable, you can generate one from [the API access page](https://ohdear.app/user/api-tokens).

## Usage

```bash
ohdear-cli list
```

**Available commands**

- `ohdear-cli me`  
   Display details about the currently authenticated user
- `ohdear-cli sites:add [url]`  
   Add a new site to Oh Dear
- `ohdear-cli sites:list`  
   Display a list of sites and their current status
- `ohdear-cli sites:show [id]`  
   Display details about a specific site
- `ohdear-cli status-pages:list`  
   Display a list of status pages and their current status
- `ohdear-cli status-pages:show [id]`  
   Display details about a specific status page
- `ohdear-cli performance:show [id] [start-date?] [end-date?] [--limit=5] [--timeframe=1h]`  
   Display performance details for a specific site
- `ohdear-cli maintenance-period:add [site-id] [start-date] [end-date]`  
   Add a new maintenance period for a site
- `ohdear-cli maintenance-period:delete [id]`  
   Delete a maintenance period
- `ohdear-cli maintenance-period:show [id]`  
   Display maintenance periods for a specific site
- `ohdear-cli maintenance-period:start [site-id] [seconds]`  
   Start a new maintenance period for a site
- `ohdear-cli maintenance-period:stop [site-id]`  
   Stop the currently active maintenance period for a site
- `ohdear-cli mixed-content:show [site-id]`  
   Display mixed content for a specific site
- `ohdear-cli broken-link:show [site-id]`  
   Display broken links for a specific site
- `ohdear-cli certificate-health:show [site-id] [--checks] [--issuers]`  
   Display certificate health for a specific site (use `--checks` or `--issuers` for additional information)
- `ohdear-cli check:show [site-id]`  
   Display checks for a specific site
- `ohdear-cli check:enable [id]`  
   Enable a specific check
- `ohdear-cli check:disable [id]`  
   Disable a specific check
- `ohdear-cli check:request-run [id]`  
   Request a new run for a specific check
- `ohdear-cli uptime:show [site-id] [start-date?] [end-date?] [--limit=10] [--timeframe=hour]`  
   Display the uptime for a specific site
- `ohdear-cli downtime:show [site-id] [start-date?] [end-date?] [--limit=10]`  
   Display the downtime for a specific site
- `ohdear-cli cron-check:show [site-id]`  
   Display the cron checks for a specific site
- `ohdear-cli cron-check:add [site-id] [name] [frequency-or-expression] [--grace-time=5] [--description=] [--timezone=UTC]`  
   Add a new cron check for a site
- `ohdear-cli cron-check:delete [id]`  
   Delete a cron check
- `ohdear-cli status-page-updates:add [status-page-id] [title] [text] [--severity=info] [--pinned] [--time=]`  
   Add a new update for a status page
- `ohdear-cli status-page-updates:list [status-page-id]`  
   Display updates for a status page
- `ohdear-cli status-page-updates:delete [id]`  
   Delete a status page update
- `ohdear-cli dns-history:list`  
   Display a list of DNS history items and their summary
- `ohdear-cli dns-history:show [site-id] [id]`  
   Display details about a specific DNS history item

## Contributing

Thank you for considering contributing to Oh Dear CLI. All contributions are welcome via pull requests.

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the Twitter account for latest announcements or just come say hi!: [@enunomaduro](https://twitter.com/enunomaduro)

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L)
- Patreon: [Donate](https://www.patreon.com/nunomaduro)

## License

Oh Dear CLI is an open-sourced software licensed under the [MIT license](LICENSE.md).
