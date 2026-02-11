# Imagen base
FROM php:7.4-apache

# Activar mod_rewrite (necesario para muchas apps PHP)
RUN a2enmod rewrite

# Copiar los archivos PHP al contenedor
COPY . /var/www/html/

# Cambiar permisos
RUN chown -R www-data:www-data /var/www/html/

# Configurar Apache para mostrar errores (opcional)
RUN echo "display_errors=On" >> /usr/local/etc/php/conf.d/docker-php.ini
