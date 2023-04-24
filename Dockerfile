FROM ubuntu 

RUN apt update 
RUN apt -y install apache2 
RUN apt -y install apache2-utils 
RUN apt clean
COPY . /var/www/html
EXPOSE 80
CMD [“apache2ctl”, “-D”, “FOREGROUND”]