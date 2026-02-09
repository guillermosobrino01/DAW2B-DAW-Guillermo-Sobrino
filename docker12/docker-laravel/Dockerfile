# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala las extensiones necesarias de PHP
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos de la aplicación al contenedor
ADD laravel /var/www/html

# Configura el propietario de los archivos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    git
RUN docker-php-ext-install zip

# Instalar las dependencias de Laravel
RUN composer config --global audit.block-insecure false \
&& composer update --no-dev --prefer-dist --no-interaction --optimize-autoloader

# Exponer el puerto 80
EXPOSE 80

# Comando para ejecutar Apache2
CMD ["apache2-foreground"]

# Aumentar la memoria y límite de tiempo de Composer
RUN php -d memory_limit=-1 /usr/local/bin/composer config -g repo.packagist composer https://packagist.org

# Cambiar permisos de directorios
RUN chmod -R 775 /var/www/html/storage
RUN chmod -R 775 /var/www/html/bootstrap/cache

# Configurar el sitio web de Apache
RUN a2dissite 000-default.conf
COPY sitio_laravel.conf /etc/apache2/sites-available
RUN a2ensite sitio_laravel.conf
RUN service apache2 restart

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite