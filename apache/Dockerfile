FROM httpd:alpine
RUN apk update; \
    apk upgrade;
RUN apk add \
  bash \
  apache2 \
  php7-apache2
COPY httpd.conf /usr/local/apache2/conf/
EXPOSE 6666/tcp