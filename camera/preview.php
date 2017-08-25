<?php
$pid = exec("raspistill -p '0,0,50,50' -t 0 > /dev/null & echo $!");
file_put_contents("/var/www/html/camera/pid.txt", $pid);
