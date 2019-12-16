#!/bin/bash
###########################################################
# Colored output
GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m' # No Color
###########################################################
LARADOCK_DIR="/home/belashev/git/laradock"

print_green()
{
	echo -e "[${GREEN} $1 ${NC}]"
}

print_red()
{
        echo -e "[${RED} $1 ${NC}]"
}


echo 'Start laradock';
cd $LARADOCK_DIR || print_red "FAIL !";
docker-compose up -d mysql php-fpm;
docker-compose up -d nginx;
#docker-compose up -d apache2;
print_green "done";

