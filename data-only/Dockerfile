FROM debian:jessie

VOLUME ["/var/app" , "/var/lib/mysql"]
ADD app /var/app

#To keep container running
ENTRYPOINT /usr/bin/tail -f /dev/null