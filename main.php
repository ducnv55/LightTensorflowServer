<?php
while (true) {
	shell_exec("php /var/www/html/camera/capture.php");
	shell_exec("python /var/www/html/image_processing/classify.py /var/www/html/test_dataset/captured_image.jpg > /var/www/html/result_analyzing/result.txt");
	print_r(shell_exec("/usr/bin/php /var/www/html/result_analyzing/ananlyze.php"));
}
