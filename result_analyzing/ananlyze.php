<?php
$lines = file('/var/www/html/result_analyzing/result.txt');
$output = array();
for ($i = 0; $i < count($lines); $i+=2) {
	$key = trim(preg_replace('/\s+/', ' ', $lines[$i]));
	$output[$key] = $lines[$i+1];
}
foreach ($output as $key => $value) {
	print_r($key . ": " . $value*100 . "%\n");
	if ((string)$key == "dog" && (int)($value*100) > 90) {
		print_r($key . " is detected\n");
		shell_exec("php /var/www/html/raspberry_pin/switch.php");
	}
}
