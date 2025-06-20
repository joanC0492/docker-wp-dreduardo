FROM wordpress:6.8.1-php8.2

# Copiar configuración PHP
COPY ./uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# Copiar plugins y temas (desde wp-content/)
COPY ./wp-content/plugins /var/www/html/wp-content/plugins
COPY ./wp-content/themes /var/www/html/wp-content/themes

# Opcional: wp-config.php personalizado (sin credenciales)
# COPY ./wp-config.php /var/www/html/wp-config.php