FROM php:8.0-apache

RUN set -ex && apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libssl-dev \
    libzip-dev \
    zlib1g-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo_mysql session

RUN docker-php-ext-install zip

RUN echo "upload_max_filesize=64M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size=64M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "memory_limit=1G" >> /usr/local/etc/php/conf.d/uploads.ini

COPY apache.conf /etc/apache2/sites-available/000-default.conf

COPY ./concrete-cms-9.3.4/ /var/www/html/

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html/packages
RUN chmod -R 777 /var/www/html/packages
RUN chown -R www-data:www-data /var/www/html/application
RUN chmod -R 777 /var/www/html/application

EXPOSE 80

CMD ["apache2-foreground"]