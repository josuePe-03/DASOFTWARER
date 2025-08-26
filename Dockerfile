# Usar PHP 8.3 con Apache
FROM php:8.3-apache

# Instalar extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libwebp-dev libxpm-dev libzip-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath

# Instalar Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Configurar Apache
RUN a2enmod rewrite \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername \
    && sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Copiar todo el proyecto
COPY . /var/www/html
WORKDIR /var/www/html

# Permisos correctos para Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instalar dependencias de Composer
RUN php -d memory_limit=-1 /usr/local/bin/composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Cache de Laravel para producción
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Exponer puerto 80
EXPOSE 80

# Comando principal
CMD ["apache2-foreground"]
