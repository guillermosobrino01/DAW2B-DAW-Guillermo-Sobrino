# backend/Dockerfile
FROM php:7.4-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar la aplicación PHP
COPY php/ /var/www/html/
