FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y apt-utils
RUN apt-get install -y apache2
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN pat upgrade
RUN apt-get install -y php7.4

WORKDIR /var/www/html
COPY ./app ./

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]