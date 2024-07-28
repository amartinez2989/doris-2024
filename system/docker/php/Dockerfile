FROM amartinez8929/laravel-doris-be

ARG UID
EXPOSE $UID

COPY ./php.ini /usr/local/etc/php/php.ini
# Install packages and PHP extensions

RUN mkdir -p /appdata/www

# Config XDEBUG
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /appdata/www
USER appuser
