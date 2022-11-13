FROM nginx:alpine

RUN apk update \
    && apk upgrade \
    && apk --update add logrotate \
    && apk add --no-cache openssl \
    && apk add --no-cache bash

RUN apk add --no-cache curl

#RUN set -x ; \
#    addgroup -g 82 -S www-data ; \
#    adduser -u 82 -D -S -G www-data www-data && exit 0 ; exit 1

ARG PHP_UPSTREAM_CONTAINER=php
ARG PHP_UPSTREAM_PORT=9000

COPY ./docker/nginx/project.conf /etc/nginx/sites-avialable/default.conf

#CMD ["nginx", "-s", "reload"]

EXPOSE 80 81 443
