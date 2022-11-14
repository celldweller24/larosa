# syntax = docker/dockerfile:1
FROM php:8.1.1-fpm

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && \
    apt-get install -y --force-yes --no-install-recommends \
        libmemcached-dev \
        libzip-dev \
        libz-dev \
        libzip-dev \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
        libssl-dev \
        openssh-server \
        libmagickwand-dev \
        git \
        cron \
        nano \
        libxml2-dev \
        libreadline-dev \
        libgmp-dev \
        mariadb-client \
        unzip \
        nodejs \
        npm \
    && docker-php-ext-install \
        bcmath \
        intl \
        pcntl \
        iconv \
        soap \
        sockets \
        zip \
        opcache

# Install the PHP pcntl extention
RUN docker-php-ext-install pcntl

# Install the PHP zip extention
RUN docker-php-ext-install zip

# Install the PHP pdo_mysql extention
RUN docker-php-ext-install pdo_mysql

# Install the PHP intl extention
RUN docker-php-ext-install intl

# Install the PHP gmp extention
RUN docker-php-ext-install gmp

#####################################
# GD:
#####################################

# Install the PHP gd library
RUN docker-php-ext-install gd && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

RUN addgroup www-data; \
    adduser www-data www-data

USER www-data

WORKDIR /app

COPY --chown=www-data:www-data . /app

VOLUME ["/app"]
