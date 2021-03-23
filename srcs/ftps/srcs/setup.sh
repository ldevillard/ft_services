#!/bin/sh
telegraf &
adduser -D "admin" && echo "admin" | chpasswd
chown -R admin:admin /home/admin
touch /var/log/vsftpd.log
echo "admin" | tee -a /etc/vsftpd.userlist
mkdir /var/run/vsftpd
mkdir /var/run/vsftpd/empty
service vsftpd restart
tail -f /var/log/vsftpd.log