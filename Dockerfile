FROM php:8.4-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions zlib

COPY builds/ohdear /ohdear

ENTRYPOINT ["/ohdear"]
