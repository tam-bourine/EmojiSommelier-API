FROM nginx:1.15.9-alpine

EXPOSE 80
RUN apk update && apk upgrade \
    && rm -r /var/cache/apk/*

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./conf.d/php-upstream.conf /etc/nginx/conf.d/php-upstream.conf
