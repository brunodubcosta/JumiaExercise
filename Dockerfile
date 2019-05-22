FROM php:7.2-apache

MAINTAINER Bruno Costa <brunoxdcosta@gmail.com>

COPY . /src

RUN chown -R www-data:www-data /src \ && a2enmod rewrite