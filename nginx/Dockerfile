FROM nginx:1.9.2
RUN ln -sf /usr/share/zoneinfo/Asia/Taipei  /etc/localtime && \
	rm /etc/nginx/conf.d/default.conf
ADD ./default.conf /etc/nginx/conf.d/
VOLUME /etc/nginx