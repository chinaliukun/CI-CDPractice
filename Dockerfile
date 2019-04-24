FROM php:7.2-apache
RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install mysqli

RUN git clone https://github.com/chinaliukun/CI-CDPractice.git \
    && mv CI-CDPractice /var/www/html \
    && chown -R www-data:www-data /var/www/html
