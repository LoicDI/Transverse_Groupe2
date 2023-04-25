# Use an official PHP runtime as a base image
FROM php:8.1-apache

RUN apt-get update && \
    apt-get install --yes --force-yes \
    cron g++ gettext libicu-dev openssl \
    libc-client-dev libkrb5-dev  \
    libxml2-dev libfreetype6-dev \
    libgd-dev libmcrypt-dev bzip2 \
    libbz2-dev libtidy-dev libcurl4-openssl-dev \
    libz-dev libmemcached-dev libxslt-dev git-core libpq-dev \
    libzip4 libzip-dev libwebp-dev


# PHP Configuration
RUN docker-php-ext-install bcmath bz2 calendar  dba exif gettext iconv intl  soap tidy xsl zip&&\
    docker-php-ext-install mysqli pdo pdo_mysql  &&\
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp &&\
    docker-php-ext-install gd &&\
    docker-php-ext-configure hash --with-mhash &&\
    curl -sS https://getcomposer.org/installer | php \
            && mv composer.phar /usr/bin/composer

# Apache Configuration
RUN a2enmod rewrite 

EXPOSE 80

COPY php.ini /usr/local/etc/php/
COPY ./dist/ /var/www/html


CMD ["apache2ctl", "-D", "FOREGROUND"]
