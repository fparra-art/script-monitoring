#!/bin/bash


docker_parameter=$1;

docker_parameter_comparator=("launch-and-build", "stop");


case ${docker_parameter,*} in
    ${docker_parameter_comparator[0]})
        docker compose up -d;
    ;;
    *)
        echo "No arguments entered";
    ;;
esac

