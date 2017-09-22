$(document).ready(function(){
	var light = 0;
	if ($("#light_img").attr("src") == "img/light_on.png") {
		light = 1;
	}
	setInterval(function(){
		$.ajax({url: "../raspberry_pin/pin.txt", success: function(result){
			console.log("init light: " + light + " - read: " + result);
        		if (parseInt(result) != light) {
				if (light == 0) {
					$("#light_img").attr("src", "img/light_on.png");
					console.log("turn on");
				} else {
					$("#light_img").attr("src", "img/light_off.png");
					console.log("turn off");
				}
				light = parseInt(result);
			}
    		}}); 
	}, 500);
})
