FROM wyveo/nginx-php-fpm:latest

WORKDIR /app

COPY . .

RUN composer install

COPY ./.docker/nginx/default.conf /etc/nginx/conf.d/default.conf





