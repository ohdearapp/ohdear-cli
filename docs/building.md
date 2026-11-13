# Building the PHAR

Install the locked dependencies, including development dependencies, then build:

```bash
composer install --prefer-dist --no-interaction
php ohdear app:build ohdear --build-version=5.4.1 --no-interaction
php builds/ohdear --version
```

Replace `5.4.1` with the intended release version. PHP needs `phar.readonly=Off`
when compiling, or use `php -d phar.readonly=0 ohdear app:build ...`.

Runtime dependencies live in `require-dev` so Composer users only install the
compiled binary. Do not build with `composer install --no-dev` or enable Box's
`exclude-dev-files`: either would remove runtime dependencies too.

`box.json` excludes PHPStan's payload, Pint, Larastan, Paratest and the bundled
Box executable. PHPStan's `bootstrap.php` stays because Composer autoloads it.
Pest, PHPUnit and their supporting sources also stay because the installed
Composer plugins and autoload files reference them. Removing those whole
directories breaks autoloader generation or startup.

CI builds and smoke-tests the standalone PHAR on pushes and pull requests. The
release workflow rebuilds it from the tagged commit, but also requires the
committed `builds/ohdear` to report the tag's version for Composer installs.
Rebuild and commit that file before tagging a release.
