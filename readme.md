I've created a docker image at paulcharpie/concrete-cms:latest for this repo. The goal for this repo is to be able to quickly and easily set up a new Concrete CMS instance.
Environment variables are set up to allow using one central package for multiple concrete instances.

# Setting up a new installation
The basic setup is a concrete installation that runs on whatever port you specify in docker compose, and it connects to 
a separate database container (see step 2 if you don't already have a database container). You can access phpmyadmin of that database on port 8082 (default).

To create a new instance:
1. Modify the .env file with the site specific information
2. Run the container with ```docker-compose --env-file .env up -d ``` if you already have a database setup you want to use (it should be on port 3306). If you don't have a db already, use ```docker-compose --env-file .env --profile db up -d```
3. Navigate to the address (default is localhost:8081) and follow the installation instructions. This will setup a mysql database and a phpmyadmin instance at port 8082.
4. If it gives you errors about the config folders being writable, you may need to SSH into the file folder and chmod the permissions.

# Making changes to the image
1. Make your changes
2. Build the container with `docker build -t paulcharpie/concrete-cms:latest .`
3. Push it to docker hub with `docker push paulcharpie/concrete-cms:latest`
4. Pull the updated image on the server ```docker pull paulcharpie/concrete-cms:latest```
5. When the image is rebuilt, everything will reset. You will have to run the installation on a blank database, then use `docker exec` to go to application/config/database.php and change the credentials