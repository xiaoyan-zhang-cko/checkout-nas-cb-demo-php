-- Build image with name cb
``docker image build -t cbdemo .``

-- Launch a container with command line instead of docker-compose.xml
__ php8cbcontainer is container name, cbdemo is the image name
``docker run -it --rm -p 8080:80 -p 443:443 --name php8cbcontainer -v "$PWD":/var/www/html cbdemo``

-- Start docker and image names from docker-compose.xml
``docker-compose up``

-- Stop docker
``docker-compose down``

-- List all running dockers
``docker ps -a -q``

-- Stop or delete a running docker container
``docker stop/rm ${id}``

-- Stop or delete all running dockers
``docker stop/rm $(docker ps -a -q)``

-- List image
``docker image ls`` or ``docker images -a``

-- Remove an image
``docker image rm <image_id>``

-- Remove EVERYTHING !!!!!!!!!!!!!!!!!!!!!!
``docker system prune -a``
