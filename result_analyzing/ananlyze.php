<?php
$lines = file('/var/www/html/result_analyzing/result.txt');
$output = array();
for ($i = 0; $i < count($lines); $i+=2) {
	$key = trim(preg_replace('/\s+/', ' ', $lines[$i]));
	$output[$key] = $lines[$i+1];
}
foreach ($output as $key => $value) {
	echo $key . ": " . $value;
	if ($key == "cat" && $value * 100 > 90) {
		exec("php /var/www/html/raspberry_pin/switch.php");
	}
}
