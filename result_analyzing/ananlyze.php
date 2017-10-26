<?php
$lines = file('/var/www/html/result_analyzing/result.txt');
$output = array();
for ($i = 0; $i < count($lines); $i+=2) {
	$key = trim(preg_replace('/\s+/', ' ', $lines[$i]));
	$output[$key] = trim(preg_replace('/\s+/', ' ', $lines[$i+1]));
}
file_put_contents('/var/www/html/result_analyzing/result_json.txt', json_encode($output));
foreach ($output as $key => $value) {
	print_r($key . ": " . $value*100 . "%\n");
	if ((string)$key == "dog" && (int)($value*100) > 80 || (string)$key == "minh" && (int)($value*100) > 70) {
		print_r($key . " is detected\n");
		shell_exec("php /var/www/html/raspberry_pin/switch.php");
	}
}
