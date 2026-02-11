# web/clientesPedidos/Dockerfile
FROM php:8.1-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite (si la app lo necesita)
RUN a2enmod rewrite

# Copiar la aplicación PHP al contenedor
COPY app/ /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html
