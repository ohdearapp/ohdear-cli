FROM php:8.2-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions zlib

COPY builds/ohdear /ohdear

ENTRYPOINT ["/ohdear"]
