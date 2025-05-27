# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copia el código de tu aplicación al contenedor
COPY . /var/www/html/

# Asigna permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Instala extensiones necesarias de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expone el puerto 80
EXPOSE 80