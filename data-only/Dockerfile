FROM debian:jessie

VOLUME ["/var/app"]
COPY app /var/app

#To keep container running
ENTRYPOINT /usr/bin/tail -f /dev/null