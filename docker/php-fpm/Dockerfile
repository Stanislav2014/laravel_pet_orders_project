FROM php:7.3-fpm

ARG DEBIAN_FRONTEND=noninteractive

WORKDIR /srv/courier-plus

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libmemcached-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd opcache

COPY ./opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# memcached
RUN apt-get install -y --no-install-recommends  zlib1g-dev \
    && rm -r /var/lib/apt/lists/* \
    && pecl install memcached-3.1.5 \
    && docker-php-ext-enable memcached \

#ADD . /srv/courier-plus
#RUN chown -R www-data:www-data /srv/courier-plus

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
