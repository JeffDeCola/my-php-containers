#!/bin/bash
# my-php-containers update_concourse.sh

fly -t ci set-pipeline -p catch-microservice -c ci/pipeline.yml --load-vars-from ci/.credentials.yml
