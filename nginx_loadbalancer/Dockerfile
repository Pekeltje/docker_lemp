# NGINX 1.19.2 - https://hub.docker.com/_/nginx
FROM nginx:1.19.2
RUN apt-get update && apt-get install nano htop -y

# Remove all configs, we only need to loadbalance the requests
RUN rm /etc/nginx/conf.d/*

