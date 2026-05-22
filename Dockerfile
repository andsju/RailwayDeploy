FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql \
 && a2dismod mpm_event || true \
 && a2dismod mpm_worker || true \
 && a2enmod mpm_prefork

COPY . /var/www/html/

EXPOSE 80