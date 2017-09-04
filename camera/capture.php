<?php
exec("php kill_preview.php");
exec("raspistill -o /var/www/html/test_dataset/captured_image.jpg -tl 5000 -t 0 -w 1920 -h 1080");
exec("php preview.php");
