# --- STAGE 1: Build Composer Dependencies ---
FROM composer:2 AS composer_build
WORKDIR /app

# Copy only composer files to leverage cache
COPY composer.json composer.lock ./

# Install dependencies without dev packages
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# --- STAGE 2: Main Application ---
FROM php:8.3-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git libxml2-dev libxslt1-dev \
    default-mysql-client default-libmysqlclient-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip mysqli pdo pdo_mysql \
    && docker-php-ext-install dom xml \
    && docker-php-ext-install xmlreader xmlwriter xsl \
    && a2enmod rewrite

# Copy Apache config if customized
COPY 000-default.conf /etc/apache2/sites-available/
RUN a2ensite 000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy PHP configuration
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy application source code
COPY . .

# Copy vendor folder from build stage
COPY --from=composer_build /app/vendor ./vendor

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80 explicitly (optional)
EXPOSE 80
