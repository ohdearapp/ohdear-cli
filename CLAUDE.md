# Oh Dear CLI

## Overview

A standalone CLI tool for [Oh Dear](https://ohdear.app) website monitoring. Built with Laravel Zero 12 and `spatie/laravel-openapi-cli`, which auto-generates all API commands from the Oh Dear OpenAPI spec.

## Architecture

- **OpenAPI-driven commands**: All API commands are auto-generated from `https://ohdear.app/api-docs/ohdear-openapi.yml` via `spatie/laravel-openapi-cli`. No manual command classes for API endpoints.
- **4 custom commands**: `login`, `logout`, `clear-cache`, `install-skill` in `app/Commands/`.
- **Credential storage**: API tokens stored in `~/.ohdear/config.json` via `App\Services\CredentialStore`.
- **Auth validation**: `GET https://ohdear.app/api/me` validates tokens during login.

## Key files

- `app/Providers/AppServiceProvider.php`: Registers OpenAPI CLI, CredentialStore singleton, OhDearDescriber
- `app/Services/CredentialStore.php`: Token read/write/flush to `~/.ohdear/config.json`
- `app/Services/OhDearDescriber.php`: Custom describer that shows ASCII banner in help/list output
- `app/Concerns/RendersBanner.php`: ASCII art "OH DEAR" banner with orange gradient
- `config/cache.php`: File cache in `sys_get_temp_dir().'/ohdear'` for OpenAPI spec caching
- `ohdear`: Entry point script
- `box.json`: PHAR build configuration

## Commands

```bash
composer test      # Run tests with Pest
composer analyse   # Run PHPStan (level 5)
composer format    # Run Laravel Pint
```

## Testing

Tests use Pest PHP. Feature tests mock HTTP calls with `Http::fake()` and use temp directories for credential storage isolation. Test files are in `tests/Feature/`.
