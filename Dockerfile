FROM php:7.2-fpm

RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y  mysql-client git && \
    docker-php-ext-install pdo_mysql&& \
    apt-get install -y openssl zip unzip && \
    # composer
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer
COPY php.ini /usr/local/etc/php/php.ini
COPY . /laravel
WORKDIR /laravel
RUN composer install && cp .env.example .env && php artisan key:generate
