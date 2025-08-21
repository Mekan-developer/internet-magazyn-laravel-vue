FROM php:8.2-fpm

# Установим расширения для Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
