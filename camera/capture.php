<?php
exec("php kill_preview.php");
exec("raspistill -o /var/www/html/test_dataset/captured_image.jpg -t 2000 -w 1920 -h 1080");
