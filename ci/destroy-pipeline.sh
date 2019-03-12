#!/bin/bash
# my-php-containers destroy-pipeline.sh

fly -t ci destroy-pipeline --pipeline my-php-containers
