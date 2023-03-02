# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com) and this project adheres to [Semantic Versioning](https://semver.org).

## 3.4.0 - 2023-03-02

### Added
- Add Docker image support ([#43](https://github.com/ohdearapp/ohdear-cli/pull/43))

## 3.3.0 - 2023-01-30

### Added
- Add support for Lighthouse Reports ([#40](https://github.com/ohdearapp/ohdear-cli/pull/40))

### Removed
- Drop support for PHP 8.0 ([#41](https://github.com/ohdearapp/ohdear-cli/pull/41))

## 3.2.2 - 2022-08-16

### Changed
- Move app layout into component ([#37](https://github.com/ohdearapp/ohdear-cli/pull/37))
- Handle expired or invalid tokens ([#38](https://github.com/ohdearapp/ohdear-cli/pull/38))

## 3.2.1 - 2022-06-06

### Fixed
- Fix compatibility with PHP 8.0 ([86e042c](https://github.com/ohdearapp/ohdear-cli/commit/86e042c17e80efc4b789bdbb6e433d6c7b9dbd3b))

## 3.2.0 - 2022-06-02

### Added
- Add command to show application health ([#33](https://github.com/ohdearapp/ohdear-cli/pull/33))

## 3.1.0 - 2022-06-02

### Added
- Add proper authorisation output when unauthorised ([#32](https://github.com/ohdearapp/ohdear-cli/pull/32))

### Fixed
- Update to ignore the `VIEW_COMPILED_PATH` env variable ([ba2ef8e](https://github.com/ohdearapp/ohdear-cli/commit/ba2ef8ebd19516409a59daabd895a50aadcf9d41))

## 3.0.0 - 2022-03-15

### Added
- Update to Laravel Zero 9.x ([#25](https://github.com/ohdearapp/ohdear-cli/pull/25))
- Add commands for managing DNS history ([#26](https://github.com/ohdearapp/ohdear-cli/pull/26))

### Changed
- Update to use Termwind for output ([#27](https://github.com/ohdearapp/ohdear-cli/pull/27))

### Removed
- Drop support for PHP 7.x ([#25](https://github.com/ohdearapp/ohdear-cli/pull/25))

## [2.7.0] - 2021-02-12

### Added
- Add commands for managing status page updates ([#23](https://github.com/nunomaduro/ohdear-cli/pull/23))

## [2.6.0] - 2021-01-22

### Added
- Add command to add and delete cron checks ([#22](https://github.com/nunomaduro/ohdear-cli/pull/22))

## [2.5.0] - 2021-01-21

### Added
- Add command to show cron checks ([#21](https://github.com/nunomaduro/ohdear-cli/pull/21))

## [2.4.0] - 2020-12-22

### Added
- Add support for PHP 8 ([#17](https://github.com/nunomaduro/ohdear-cli/pull/17))
- Add command to show uptime ([#19](https://github.com/nunomaduro/ohdear-cli/pull/19))
- Add command to show downtime ([#20](https://github.com/nunomaduro/ohdear-cli/pull/20))

### Fixed
- Resolve typo with performance command ([#18](https://github.com/nunomaduro/ohdear-cli/pull/18))

## [2.3.0] - 2020-12-21

### Added
- Add commands for managing checks ([#16](https://github.com/nunomaduro/ohdear-cli/pull/16))

### Changed
- Update the output message formatting when token is not set ([#14](https://github.com/nunomaduro/ohdear-cli/pull/14))

## [2.2.0] - 2020-12-17

### Added
- Add command to show certificate health ([#12](https://github.com/nunomaduro/ohdear-cli/pull/12))

## [2.1.0] - 2020-12-16

### Added
- Add command to show broken links ([#11](https://github.com/nunomaduro/ohdear-cli/pull/11))

## [2.0.0] - 2020-12-08

### Added
- Add commands for displaying status page details ([#4](https://github.com/nunomaduro/ohdear-cli/pull/4))
- Add command to show performance records ([#5](https://github.com/nunomaduro/ohdear-cli/pull/5))
- Add commands for managing maintenance periods ([#6](https://github.com/nunomaduro/ohdear-cli/pull/6))
- Add command to show mixed content ([#8](https://github.com/nunomaduro/ohdear-cli/pull/8))

### Changed
- Update to use the PHP SDK and add initial commands ([#2](https://github.com/nunomaduro/ohdear-cli/pull/2))
- Rewrite with Laravel Zero 8 ([#3](https://github.com/nunomaduro/ohdear-cli/pull/3))
- Update to use a compiled Phar ([#7](https://github.com/nunomaduro/ohdear-cli/pull/7))

## [1.0.0] - 2018-01-18
### Added
- First
