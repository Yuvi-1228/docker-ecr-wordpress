# Stable PHP8 + Apache variant  [ version: 6.5-php8.2-apache ]
FROM wordpress:latest                 

# Recommended PHP extensions (zip, gd for images, imagick optional)
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libwebp-dev libzip-dev nano curl unzip \
 && docker-php-ext-configure gd --with-jpeg --with-webp \
 && docker-php-ext-install gd zip \
 && rm -rf /var/lib/apt/lists/*

# Healthcheck script (Apache + wp-login.php reachable check)
COPY apache-healthcheck.sh /usr/local/bin/apache-healthcheck.sh
RUN chmod +x /usr/local/bin/apache-healthcheck.sh

# Copy your wp-content (themes/plugins/uploads)
# NOTE: container startup pe wp-content overwrite hoga with this baked content.
COPY wp-content /var/www/html/wp-content

# Ensure correct perms
RUN chown -R www-data:www-data /var/www/html/wp-content

HEALTHCHECK --interval=30s --timeout=5s --retries=5 \
  CMD /usr/local/bin/apache-healthcheck.sh || exit 1
