FROM prestashop/prestashop:1.7.8

COPY cert/localhost.crt /etc/ssl/certs/
COPY cert/localhost.key /etc/ssl/private/

COPY config/sites-available/000-default.conf /etc/apache2/sites-available
COPY config/sites-available/default-ssl.conf /etc/apache2/sites-available

COPY scripts/presta_db_dumps /tmp/db_dumps
COPY scripts/presta_docker_init /tmp/docker_init

RUN a2enmod ssl
RUN a2ensite default-ssl

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

RUN chmod +x -R /tmp/db_dumps && chmod -x -R /tmp/docker_init

COPY prestashop/.htaccess /var/www/html/.htaccess
COPY prestashop/config/themes /var/www/html/config/themes
COPY prestashop/img /var/www/html/img
COPY prestashop/modules /var/www/html/modules
COPY prestashop/themes/classic /var/www/html/themes/classic
COPY prestashop/themes/child_classic /var/www/html/themes/child_classic

RUN chmod 777 -R /var/www/html