FROM phpstorm/php-73-apache-xdebug-27

ENV ACCEPT_EULA=Y

RUN a2enmod rewrite

#PHP, extenções e outros pacote necessarios
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmemcached-dev \
    curl \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libmagickwand-dev \
    libssl-dev \
    libzip-dev \
    libmcrypt-dev \
    poppler-utils -y \
    locales \
    nano \
    curl \
    wget \
    nmap \
    procps \
    tree \
    --no-install-recommends \
    && rm -r /var/lib/apt/lists/* 

RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr

RUN  docker-php-ext-install mysqli pdo_mysql gd zip exif
RUN apt-get update
RUN apt-get install -y locales locales-all

#GRPC
RUN apt-get update && apt-get install -y -q git rake ruby-ronn zlib1g-dev && apt-get clean

RUN cd /usr/local/bin && curl -sS https://getcomposer.org/installer | php
RUN cd /usr/local/bin && mv composer.phar composer

RUN pecl install grpc

RUN docker-php-ext-enable grpc

#IMAGEMAGICK
RUN apt-get update && apt-get install -y \
    libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick
    
#SOAP
RUN apt-get update -y \
  && apt-get install -y \
     libxml2-dev \
  && apt-get clean -y \
  && docker-php-ext-install soap  

# wkhtmltopdf:
RUN apt-get update && apt-get install -y libxrender1 libfontconfig1 libx11-dev libjpeg62 libxtst6 wget \
    && mkdir wkhtmltopdf_download \
    && cd wkhtmltopdf_download \
    && wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.stretch_amd64.deb \
    && apt install ./wkhtmltox_0.12.6-1.stretch_amd64.deb -y \
    && cd .. \
    && rm -rf wkhtmltopdf_download 

# xDebug
RUN echo 'zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so' >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=9009" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=VSCODE" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \ 
    && echo "xdebug.remote_enable=1" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=host.docker.internal" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini
       

RUN docker-php-ext-install mbstring pdo pdo_mysql 
    
RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap
    
RUN docker-php-ext-configure intl \
    && docker-php-ext-configure gettext \
    && docker-php-ext-install \
    intl \
    gettext

COPY ./php/php.ini /usr/local/etc/php/php.ini

RUN chown -R www-data:www-data /var/www/html

expose 80