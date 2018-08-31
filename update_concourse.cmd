REM my-php-containers update_concourse.cmd
@ECHO OFF
ECHO "START update_concourse.cmd script - From Windows"
START "concourse" "C:\Program Files (x86)\Concourse\fly-4.0.0.exe" -t ci set-pipeline -p my-php-containers -c ../pipeline.yml --load-vars-from ci/.credentials.yml
ECHO "END update_concourse.cmd script"