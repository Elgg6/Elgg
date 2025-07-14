FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libonig-dev libxml2-dev \
    libldap2-dev libpng-dev libjpeg-dev libfreetype6-dev \
    libicu-dev libcurl4-openssl-dev libssl-dev libxslt-dev \
    libcap2-bin \
    && rm -rf /var/lib/apt/lists/*

# Configure PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu \
    && docker-php-ext-install -j$(nproc) \
        mysqli pdo_mysql xml mbstring curl zip intl gd \
        soap bcmath opcache ldap xsl

# Apache configuration
RUN a2enmod rewrite headers && \
    mkdir -p /var/log/apache2 && \
    chown www-data:www-data /var/log/apache2

# Application setup
WORKDIR /var/www/elgg
COPY . /var/www/elgg

# Create data directory with correct permissions
RUN mkdir -p /var/elgg_data && \
    chown -R www-data:www-data /var/www/elgg /var/elgg_data && \
    chmod -R 775 /var/elgg_data &&

# Install Composer and dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --no-scripts --no-interaction --optimize-autoloader

# Runtime configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Allow Apache to bind to port 80 as non-root
RUN setcap 'cap_net_bind_service=+ep' /usr/sbin/apache2 && \
    chown -R www-data:www-data /var/lock/apache2 /var/run/apache2
# Health check
#HEALTHCHECK --interval=30s --timeout=3s \
    #CMD curl -f http://localhost/ || exit 1

EXPOSE 80
USER www-data
CMD ["apache2-foreground"]
