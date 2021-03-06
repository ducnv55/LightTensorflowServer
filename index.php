<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="frontend/bootstrap.min.css">
	<script src="frontend/jquery.min.js"></script>
</head>
<body>

	<?php
	$pin = file("raspberry_pin/pin.txt");
	if ($pin[0] == 1) {
		$light_on = true;
	} else {
		$light_on = false;
	}
	$lines = file('result_analyzing/result.txt');
	$output = array();
	for ($i = 0; $i < count($lines); $i+=2) {
        	$key = trim(preg_replace('/\s+/', ' ', $lines[$i]));
        	$output[$key] = $lines[$i+1];
	}	
	?>


	<div class = "col-lg-12 row">
		<div class = "col-lg-2"></div>
		<div class = "col-lg-8 text-center">
			<img id = "light_img" src = "<?php echo 'img/' . ($light_on ? 'light_on.png' : 'light_off.png') ?>" style="height:500px" class = "img-responsive"/>
		</div>
		<div class = "col-lg-2"></div>
	</div>
	<div class = "col-lg-12 row" style="font-size: 200%">
		<div class = "col-lg-3"></div>
		<?php
		foreach ($output as $key => $value) { ?>
			<div class = "col-lg-2 text-center "><?php echo $key?>: <strong id="<?php echo $key?>"><?php echo $value * 100?>%</strong></div>
		<?php } ?>
		<div class = "col-lg-3"></div>
	</div>

</body>
<script src="frontend/main.js?"></script>
</html>
