FROM php:8.2-fpm

WORKDIR /var/www/html

# Copia tus archivos de aplicación
COPY . /var/www/html/

# Establece los permisos correctos (esto ya lo tenías)
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Instala las dependencias y las extensiones MySQL y PDO MySQL
# (Asegúrate de que estas líneas estén presentes para el error "could not find driver")
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    default-mysql-client \
 && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip
EXPOSE 9000

CMD ["php-fpm"]

# No necesitas EXPOSE 80 si usas Nginx al frente, pero no hace daño.
# EXPOSE 9000 # PHP-FPM escucha en el puerto 9000 por defecto