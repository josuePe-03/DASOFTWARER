# -----------------------------
# Dockerfile Laravel Production Railway
# -----------------------------

# Base PHP con Apache
FROM php:8.3-apache

# -----------------------------
# Instalar extensiones necesarias
# -----------------------------
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libzip-dev \
    zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install gd pdo pdo_mysql zip

# -----------------------------
# Instalar Composer global
# -----------------------------
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# -----------------------------
# Configurar Apache
# -----------------------------
RUN a2enmod rewrite

# Cambiar DocumentRoot a /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Evitar warning de ServerName
RUN echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername

# Permitir .htaccess
RUN sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# -----------------------------
# Copiar proyecto
# -----------------------------
COPY . /var/www/html
WORKDIR /var/www/html

# -----------------------------
# Permisos correctos para Laravel
# -----------------------------
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# -----------------------------
# Instalar dependencias de Laravel
# -----------------------------
RUN composer install --no-dev --optimize-autoloader

# -----------------------------
# Cache de Laravel para producción
# -----------------------------
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# -----------------------------
# Opcache para PHP
# -----------------------------
RUN docker-php-ext-enable opcache

# -----------------------------
# Exponer puerto 80
# -----------------------------
EXPOSE 80

# -----------------------------
# Ejecutar Apache en primer plano
# -----------------------------
CMD ["apache2-foreground"]
