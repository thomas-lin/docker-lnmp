FROM php:5.6-fpm
 # install module
 RUN ln -sf /usr/share/zoneinfo/Asia/Taipei  /etc/localtime \
     && cp /usr/src/php/php.ini-production /usr/local/etc/php/php.ini \
     && echo 'date.timezone = "Asia/Taipei"' >> /usr/local/etc/php/php.ini \
     && sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /usr/local/etc/php/php.ini \
     && apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
     && docker-php-ext-install iconv mcrypt \
     && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
     && docker-php-ext-install gd \
     && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
     && docker-php-ext-install pdo_mysql
CMD ["php-fpm"]