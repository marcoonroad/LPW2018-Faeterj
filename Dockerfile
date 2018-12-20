FROM php:apache

RUN apt-get update -y && apt-get install -y libpng-dev curl libcurl4-openssl-dev
RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql gd curl mysqli
RUN a2enmod rewrite
RUN service apache2 restart
