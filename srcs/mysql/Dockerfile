FROM	alpine:3.12.3

#Update and install utils
RUN apk update
RUN apk add openrc
RUN apk add mariadb mariadb-client
RUN rc-status
RUN touch /run/openrc/softlevel

#Telegraf
RUN echo "http://nl.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories
RUN apk add telegraf
RUN mkdir /etc/telegraf 
ADD srcs/telegraf.conf /etc/telegraf/

#Add conf
ADD		srcs/setup.sh .
RUN		chmod 777 setup.sh

EXPOSE 3306

CMD		[ "/bin/sh", "/setup.sh" ]
