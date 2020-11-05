<p align="center">
    <img src="docs/example.png" width="100%">
</p>

<p align="center">
  <a href="https://styleci.io/repos/121807251"><img src="https://styleci.io/repos/121807251/shield" alt="StyleCI Status"/></a>
  <a href="https://packagist.org/packages/nunomaduro/ohdear-cli"><img src="https://img.shields.io/packagist/v/nunomaduro/ohdear-cli.svg?style=flat-square&label=stable" alt="Latest Stable Version"/></a>
  <a href="https://packagist.org/packages/nunomaduro/ohdear-cli"><img src="https://img.shields.io/packagist/l/nunomaduro/ohdear-cli.svg?style=flat-square" alt="License"/></a>
</p>

## About Oh Dear CLI

Oh Dear CLI was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is an Oh Dear CLI tool written in PHP with Laravel Zero.

## Installation

> **Requires [PHP 7.3+](https://php.net/releases)**

Require Oh Dear CLI cloning this repository to any location on your system:

```bash
git clone https://github.com/nunomaduro/ohdear-cli
```

Install the composer dependencies:

```bash
cd ohdear-cli && composer install
```

Configure the `.env`:

```bash
cp .env.example .env
```

## Usage

```bash
php ohdear-cli
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
- `ohdear-cli performance:show [id]`  
   Display performance details for a specific site

## Contributing

Thank you for considering contributing to Oh Dear CLI. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the Twitter account for latest announcements or just come say hi!: [@enunomaduro](https://twitter.com/enunomaduro)

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L)
- Patreon: [Donate](https://www.patreon.com/nunomaduro)

## License

Oh Dear CLI is an open-sourced software licensed under the [MIT license](LICENSE.md).
