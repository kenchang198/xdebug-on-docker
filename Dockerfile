FROM php:7.4-apache

RUN pecl install xdebug-2.9.0 && \
    docker-php-ext-enable xdebug