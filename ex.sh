#!/bin/bash
LARADOCK_DIR="/home/belashev/git/laradock"

cd $LARADOCK_DIR &&
docker-compose exec workspace bash;

