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


echo 'Stop laradock';

cd $LARADOCK_DIR || print_red "FAIL !!!" 
docker-compose down &&

print_green "Done";

