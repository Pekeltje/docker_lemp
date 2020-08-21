# docker_lemp
Docker lemp testing

For my own usage, but feel free to take it.

sudo pacman -Syu docker docker-compose
sudo groupadd docker
sudo usermod -aG docker $USER

# Not needed ???
#newgrp docker
#sudo systemctl start docker
#sudo systemctl enable docker
#sudo systemctl start docker.service
#sudo systemctl enable docker.service



# Create everything, most be in current folder
sudo docker-compose up -d



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
PHP/NGINX settings voor cachen en verwerken van meer aanvragen ?
Loadbalancer voor NGINX/PHP/MySQL ?
