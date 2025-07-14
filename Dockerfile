# Stage 1: Base image with Apache and PHP 8.1
FROM php:8.1-apache

#LABEL maintainer="your-email@example.com"
#ENV DEBIAN_FRONTEND=noninteractive

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libonig-dev libxml2-dev \
    libldap2-dev libpng-dev libjpeg-dev libfreetype6-dev \
    libicu-dev libcurl4-openssl-dev libssl-dev libxslt-dev \
    && rm -rf /var/lib/apt/lists/*

# Configure PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu \
    && docker-php-ext-install -j$(nproc) \
        mysqli pdo_mysql xml mbstring curl zip intl gd \
        soap bcmath opcache ldap xsl

# Enable Apache modules
RUN a2enmod rewrite headers

# Copy Apache virtual host configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Set working directory and copy application
WORKDIR /var/elgg-app
COPY . /var/elgg-app

# Fix file permissions for Elgg and data directory
RUN mkdir -p /var/elgg_data && \
    chown -R root:root /var/elgg_data /var/elgg-app && \
    chmod -R 775 /var/elgg_data

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --no-scripts --no-interaction --optimize-autoloader || true

# Enable error reporting (for debug)
RUN echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/elgg-errors.ini && \
    echo "display_errors = On" >> /usr/local/etc/php/conf.d/elgg-errors.ini && \
    echo "log_errors = On" >> /usr/local/etc/php/conf.d/elgg-errors.ini

# Create log directory
RUN mkdir -p /var/log/apache2 && \
    chown root:root /var/log/apache2 && \
    chmod 755 /var/log/apache2

# Expose HTTP port
EXPOSE 80

# Launch Apache in the foreground
CMD ["apache2-foreground"]
