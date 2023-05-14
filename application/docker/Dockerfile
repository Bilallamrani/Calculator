FROM php:8.0.20-apache

# ## Extension qui permet d'installer des extensions PHP
# ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# ## Install git and unzip
# RUN apt-get update && apt-get install -y --no-install-recommends git unzip && \
#     rm -rf /var/lib/apt/lists/*


# RUN chmod +x /usr/local/bin/install-php-extensions && \
#     install-php-extensions intl && \
#     curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
#     mv composer.phar /usr/local/bin/composer && \
#     apt update && apt install -yqq zip git

# ## Copy source code
# COPY ./source /var/www/html

# COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# ENV APP_ENV=prod

# ## Install composer
# RUN curl --silent --show-error https://getcomposer.org/installer | \
#     php -- --install-dir=/usr/bin/ --filename=composer
#     cd /var/www && \
#     composer install && \
#     php bin/console cache:clear && \
#     php bin/console cache:warmup && \
#     chown -R www-data:www-data /var/www

# ## Enable PHP and Apache modules
# RUN docker-php-ext-install pdo pdo_mysql mysqli gettext
# RUN a2enmod rewrite headers ssl

# WORKDIR /var/www/

# ENTRYPOINT ["bash", "./docker/docker.sh"]

# EXPOSE 80



ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl && \
    curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
    mv composer.phar /usr/local/bin/composer && \
    apt update && apt install -yqq zip git

COPY . /var/www/

COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

ENV APP_ENV=prod

RUN rm -rf /var/www/vendor && \
    rm -rf /var/www/.git && \
    rm -rf /var/www/.env.local && \
    cd /var/www && \
    composer install && \
    php bin/console cache:clear && \
    php bin/console cache:warmup && \
    chown -R www-data:www-data /var/www
    
WORKDIR /var/www/

ENTRYPOINT ["bash", "./docker/docker.sh"]

EXPOSE 80
