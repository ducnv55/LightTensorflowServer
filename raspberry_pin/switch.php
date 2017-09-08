<?php
// set output for gpio pin (9 for default)
exec("gpio mode 9 out");
$pin_status = file("/var/www/html/raspberry_pin/pin.txt");
print_r("old led: " . $pin_status[0]);
if ($pin_status[0] == 1) {
	exec("gpio write 9 0");
} else {
	exec("gpio write 9 1");
}
exec("php /var/www/html/raspberry_pin/read_pin.php");
