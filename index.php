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
	?>


	<div class = "col-lg-12 row">
		<div class = "col-lg-2"></div>
		<div class = "col-lg-8 text-center">
			<img src = "<?php echo 'img/' . ($light_on ? 'light_on.png' : 'light_off.png') ?>" style="height:500px" class = "img-responsive"/>
		</div>
		<div class = "col-lg-2"></div>
	</div>
	<div class = "col-lg-12 row" style="font-size: 200%">
		<div class = "col-lg-3"></div>
		<div class = "col-lg-2 text-center ">minh: <strong>0.9999</strong></div>
		<div class = "col-lg-2 text-center">abc: <strong>aeg</strong></div>
		<div class = "col-lg-2 text-center">def: <strong>agejiowjg</strong></div>
		<div class = "col-lg-3"></div>
	</div>

</body>
<script src="frontend/main.js"></script>
</html>
