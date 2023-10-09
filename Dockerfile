FROM php:7.4-apache

RUN a2enmod rewrite
RUN a2enmod headers

RUN docker-php-ext-install -j$(nproc) mysqli opcache pdo pdo_mysql


ENV WORDPRESS_DB_HOST locahost
ENV WORDPRESS_DB_USER exampleuser
ENV WORDPRESS_DB_PASSWORD examplepass
ENV WORDPRESS_DB_NAME exampledb
