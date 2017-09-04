<?php
$lines = file('result.txt');
$output = array();
for ($i = 0; $i < count($lines); $i+=2) {
	$key = trim(preg_replace('/\s+/', ' ', $lines[$i]));
	$output[$key] = $lines[$i+1];
}
foreach ($output as $key => $value) {
	print_r($key . " => " . $value);
}
