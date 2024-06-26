FROM php:8.3-apache

ENV TZ=Europe/Prague
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install \
    curl \
    zip \
    git \
    zlib1g-dev \
    libzip-dev \
    libicu-dev g++

RUN docker-php-ext-install pdo pdo_mysql mysqli && docker-php-ext-configure intl && docker-php-ext-install intl && docker-php-ext-install opcache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get -y clean
RUN apt-get -y autoclean
RUN apt-get -y autoremove
RUN a2enmod rewrite

COPY build/test/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY build/test/php.ini /usr/local/etc/php/php.ini

WORKDIR /app/src

# Aliases
RUN echo 'alias ll="ls -lah"' >> ~/.bashrc
RUN echo 'alias c="composer"' >> ~/.bashrc

# Terminal adjustments
ENV TERM=xterm-256color
RUN echo "PS1='\e[92m\u\e[0m@\e[94m\h\e[0m:\e[35m\w\e[0m# '" >> /root/.bashrc

COPY . .

EXPOSE 80