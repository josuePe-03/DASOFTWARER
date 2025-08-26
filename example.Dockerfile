FROM php:8.3-apache

# ----------------------------
# Instalar dependencias PHP y sistema
# ----------------------------
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libzip-dev \
    zlib1g-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Instalar extensiones PHP necesarias
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd pdo pdo_mysql zip calendar \
    && docker-php-ext-enable calendar

# Instalar phpredis
RUN pecl install redis && docker-php-ext-enable redis

# Instalar Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# ----------------------------
# Configuración Apache y Laravel
# ----------------------------
# Permitir .htaccess
RUN sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Apuntar Apache al directorio public de Laravel
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# ----------------------------
# Copiar proyecto
# ----------------------------
COPY . /var/www/html/

WORKDIR /var/www/html

# Instalar dependencias de Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Crear directorios storage/cache y asignar permisos
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ----------------------------
# Instalar y construir frontend con Vite
# ----------------------------
RUN npm install && npm run build

# ----------------------------
# Entrypoint para migraciones y arranque de Apache
# ----------------------------
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

EXPOSE 80
