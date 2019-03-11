#!/bin/bash
# my-php-containers set-pipeline.sh

fly -t ci set-pipeline -p my-php-containers -c pipeline.yml --load-vars-from ../../../.credentials.yml
