-------------- How to run --------------------------
1. git clone https://....
2. Access cloned folder: cd ./docker-project
3. Allow to run Docker installation file: chmod +x install-docker.sh
4. Run ./install-docker.sh
5. Then, deploy application: docker compose up -d
6. After that, go to your browser --> access http://Your_ubuntuVM_IPaddress:8080 and import database to "dbtest".
7. Finally, go to "wp-option" file --> changes site URL & homesite to your domain name.
You got it!!! Now you can access your website via http://your_domain_name.
