$(document).ready(function(){
	var light = 0;
	if ($("#light_img").attr("src") == "img/light_on.png") {
		light = 1;
	}
	setInterval(function(){
		// light image
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

		// data statistics
		$.ajax({url: "../result_analyzing/result_json.txt", success: function(result){
			var obj = JSON.parse(result);
			$.each( obj, function( key, value ) {
				$("#" + key).text(parseFloat(value * 100).toFixed(3) + "%");
			});
		}});
 
	}, 5000);
})
