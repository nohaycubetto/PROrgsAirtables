FROM richarvey/nginx-php-fpm

ENV WEBROOT /var/www/html/public
ENV RUN_SCRIPTS 1

ADD https://github.com/nohaycubetto/PROrgsAirtables/archive/master.zip /var/www/html/

RUN unzip /var/www/html/master.zip && rm /var/www/html/master.zip && mv PROrgsAirtables-master/* ./ && rmdir PROrgsAirtables-master
