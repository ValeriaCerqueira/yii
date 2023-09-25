# Use uma imagem base do PHP 7.3
FROM php:7.3-apache

# Atualize o sistema e instale dependências
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev && \
    docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr && \
    docker-php-ext-install gd mysqli
