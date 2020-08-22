# docker_lemp
Docker lemp testing

For my own usage, but feel free to take it.

sudo pacman -Syu docker docker-compose

sudo groupadd docker

sudo usermod -aG docker $USER


# Create everything, most be in current folder
sudo docker-compose up -d

# Loadbalancer test
docker-compose scale nginx_dev=10

docker-compose scale php_dev=10

# Get shell in container
docker exec -it CONTAINER_NAME /bin/bash

# Show images
docker images

# Show running containers
docker ps

# Cleanup
docker system prune -a -f


# ToDo
Remove PHP module installer script ?

PHP/NGINX optimize/caching ?

Loadbalancer PHP/MySQL ?

