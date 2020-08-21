# PHP 7.4.9 FPM Debian buster image - https://github.com/docker-library/docs/blob/master/php/README.md#supported-tags-and-respective-dockerfile-links
FROM php:7.4.9-fpm-buster

# Includes djpeg/gOCR stuff
RUN apt-get update && apt-get install nano htop curl zlib1g-dev libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev libfreetype6-dev gocr -y

# PHP module installer, docker-php-ext-install keeps failing (Find replacement in future?)
# https://hub.docker.com/r/mlocati/php-extension-installer
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && install-php-extensions gd imagick mysqli opcache exif pdo_mysql mcrypt json zip
