FROM php:8.1.8-fpm-alpine

RUN apk add --update --no-cache curl && curl -sS https://getcomposer.org/installer --output installer && php ./installer --version="2.2.5" && mv composer.phar /usr/local/bin/composer

RUN apk add --update --no-cache libzip-dev \
    curl-dev \
    zip \
    && rm -rf /var/cache/apk/*

RUN docker-php-ext-install pdo_mysql zip
RUN apk add --no-cache pcre-dev $PHPIZE_DEPS && pecl install redis && docker-php-ext-enable redis.so

WORKDIR /var/www

EXPOSE 9000
CMD ["php-fpm"]

COPY . /var/www