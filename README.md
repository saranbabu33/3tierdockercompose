# Repo to spin up a 3 tier application 

## High Level design

This repo consists of a docker-compose file with configuration to start 3 Docker container(s) with "docker-compose up -d" 

1) Database
2) PHP container (php-mysqli:7-apache)
3) Nginx 

## Database 
MySql version 5.7 is used here as a database to connect to an App container using link.

# APP
PHP App container 
