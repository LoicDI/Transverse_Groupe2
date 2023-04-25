FROM ubuntu 

RUN apt update 
RUN apt -y install apache2 apache2-utils curl
RUN curl -sSL https://packages.sury.org/php/README.txt | bash -x
RUN apt update
RUN apt install php8.1 libapache2-mod-php8.1
RUN apt clean
COPY ./dist/ /var/www/html
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
