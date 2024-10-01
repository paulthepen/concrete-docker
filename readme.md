This is set up and working pretty well.

I've created a docker image at paulcharpie/concrete-cms:latest for this repo.

# Setting up a new installation
The basic setup is a concrete installation that runs on whatever port you specify in docker compose, and it connects to 
a separate database container. You can access phpmyadmin of that database on port 8082.

To create a new instance:
1. Modify the docker-compose.yml with the correct db_name and modify the file volume location.
2. Use the docker-compose.yml file, either in portainer or the terminal. It should just be a simple `docker-compose up -d` if you use terminal.
3. Navigate to the address you set up and follow the installation instructions. 
4. If it gives you errors about the config folders being writable, you may need to SSH into the file folder and chmod the permissions.

# Making changes to the image
1. Make your changes
2. Build the container with `docker build -t paulcharpie/concrete-cms:latest .`
3. Push it to docker hub with `docker push paulcharpie/concrete-cms:latest`
4. Pull the updated image on the server, either through rebuilding in portainer or `docker pull paulcharpie/concrete-cms:latest`
5. When the image is rebuilt, everything will reset. You will have to run the installation on a blank database, then use either `docker exec` or portainer to go to application/config/database.php and change the credentials