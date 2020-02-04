FROM php:7.3-fpm-alpine3.8

# Install PHP extensions
RUN apk update && apk upgrade --update && apk --no-cache add \
    git \
    vim less \
    icu-dev \
    autoconf \
    make \
    g++ \
    gcc \
    && rm -r /var/cache/apk/*

RUN docker-php-ext-install -j$(nproc) \
    iconv \
    intl \
    mbstring \
    && pecl install xdebug-2.7.0beta1 mongodb \
    && docker-php-ext-enable xdebug mongodb

COPY  ./php.ini /usr/local/etc/php/conf.d/my-php.ini
COPY  ./php-fpm.conf /usr/local/etc/php-fpm.d/my-php-fpm.conf
