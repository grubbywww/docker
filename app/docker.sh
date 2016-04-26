#! /bin/bash

sed "s/^image:/$2/g" docker-compose.yml
