FROM php:7.2-apache

ENV TZ=Europe/Moscow

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "${TZ}"\n' > /usr/local/etc/php/conf.d/tzone.ini


RUN apt-get update && \
   apt-get install -y \
        zlib1g-dev libpng-dev \
        libcurl4-gnutls-dev \
        libxml2-dev \
        unzip

# openssl идет в коробке
#RUN docker-php-ext-install openssl

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip
RUN docker-php-ext-install xml
RUN docker-php-ext-install curl
RUN docker-php-ext-install iconv
RUN docker-php-ext-install bcmath