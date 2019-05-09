FROM php:7.2-apache
COPY sources.list /etc/apt/sources.list
RUN rm -rf /etc/apt/sources.list.d/buster.list \
  && apt-get update \
  && apt-get install -y git
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY setup.sh setup.sh
CMD [ "sh","setup.sh" ]
EXPOSE 80
CMD [ "apache2-foreground" ]
