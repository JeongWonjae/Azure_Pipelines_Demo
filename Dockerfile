FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y apt-utils
RUN apt-get install -y apache2
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y php7.3
RUN apt-get install -y php7.3-cli
RUN apt-get install -y php7.3-common
RUN apt-get install -y php7.3-gd
RUN apt-get install -y php7.3-json
RUN apt-get install -y php7.3-mysql
RUN apt-get install -y php7.3-fpm
RUN apt-get install -y php7.3-mysqli

WORKDIR /var/www/html
COPY ./app ./

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]