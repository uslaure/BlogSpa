FROM debian:blog
MAINTAINER Laure Graimont, laure.graimont@yahoo.fr
RUN apt-get update
RUN apt-get install wget -y
RUN echo deb http://packages.dotdeb.org jessie all >> /etc/apt/sources.list
RUN wget https://www.dotdeb.org/dotdeb.gpg && apt-key add dotdeb.gpg
RUN apt-get update && apt-get install -y apache2 apache2-doc apache2-mpm-prefork apache2-utils libexpat1 ssl-cert
RUN apt-get install -y libapache2-mod-php5 php5 php5-common php5-curl php5-dev php5-gd php5-idn php-pear php5-imagick php5-mcrypt php5-mysql curl
RUN apt-get install -y vim nano
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN mkdir -p /config/php5/apache2 /config/php5/cli /config/apache2
ADD ./config/php5/apache2 /config/php5/apache2
ADD ./config/php5/cli /config/php5/cli
RUN rm /etc/apache2/sites-enabled/000-default.conf
## Ajout des fichiers virtualhost
ADD ./config/apache2/virtualhost.conf /config/apache2
RUN a2enmod ssl
RUN a2enmod rewrite
EXPOSE 80