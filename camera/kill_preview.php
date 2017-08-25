<?php
$preview_pid = file_get_contents("/var/www/html/camera/pid.txt");
echo "preview pid: " . $preview_pid;
exec("kill " . $preview_pid);
