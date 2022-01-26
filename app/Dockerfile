FROM php:7.4-apache

WORKDIR /var/www/html/

COPY . .

EXPOSE 80
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www