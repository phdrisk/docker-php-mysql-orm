FROM php:7.2.6-apache
RUN docker-php-ext-install mysqli
#WORKDIR /var/www/html
#RUN composer install