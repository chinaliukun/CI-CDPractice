FROM php:7.2-apache
COPY sources.list /etc/apt/sources.list
RUN rm -rf /etc/apt/sources.list.d/buster.list \
  && apt-get update \
  && apt-get install -y git
RUN docker-php-ext-install mysqli
## 错误所在位置 正确语法为
## WORKDIR /var/www/html
WORKDIRE /var/www/html 
COPY setup.sh setup.sh
EXPOSE 80
CMD [ "bash","setup.sh" ]

