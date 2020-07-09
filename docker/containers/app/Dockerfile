FROM webdevops/php-apache-dev:7.3

RUN curl -sL https://deb.nodesource.com/setup_9.x | bash

# https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=863199
RUN mkdir -p /usr/share/man/man1

RUN apt-get update && apt-get install -y ant nodejs

COPY /docker/containers/app/php-config.ini /opt/docker/etc/php/php.ini

#COPY wait-for-it.sh /usr/local/bin/
#RUN chmod +x /usr/local/bin/wait-for-it.sh

ENV COMPOSER_CACHE_DIR=/.composer/cache
ENV WEB_DOCUMENT_ROOT=/app/vendor/shopware/shopware

# Install Composer
RUN cd ~
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php
RUN mv composer.phar /usr/local/bin/composer

COPY . /app

WORKDIR /app/vendor/shopware/shopware

RUN mv config.php.dist config.php

# Shopware needs permanent write permissions
RUN chmod 777 ./config.php
RUN chmod 777 -R ./web/cache
RUN chmod 777 -R ./files
RUN chmod 777 -R ./media
RUN chmod 777 -R ./engine/Shopware/Plugins/Community
RUN chmod 777 -R ./engine/Shopware/Plugins/Default
RUN chmod 777 -R ./web/cache/
RUN chmod 777 -R ./recovery/
RUN chmod 777 -R ./recovery/install/data
RUN chmod 777 -R ./themes/Frontend
RUN chmod 777 -R ./recovery/install/data
RUN chmod 777 -R ./var/
RUN chmod 777 -R ./custom/plugins

# Installing dependencies
# RUN composer install