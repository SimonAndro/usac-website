$(document).ready(function() {
	var snowfall = null;
	if($('.ossn-layout-startup').length) {
		$(window).on('load', function () {
			// insert canvas
			$('body').prepend('<canvas style="position: absolute; top:0px; left:0px;" id="com_frostyflakes_canvas"></canvas>');
			snowfall = com_frostyflakes_letItSnow();
		});

		$(window).on('resize', function () {
			clearInterval(snowfall);
			snowfall = com_frostyflakes_letItSnow();
		});
	}
}); 


function com_frostyflakes_letItSnow() {
	//create canvas
	var canvas = document.getElementById("com_frostyflakes_canvas");
	var ctx = canvas.getContext("2d");
	
	//set canvas fullscreen
	var W = window.innerWidth;
	var H = window.innerHeight;
	canvas.height = H;
	canvas.width = W;
	
	//generate snowflakes and atts
	var mf = 100; //max flakes
	var flakes = [];
	var start = 0;

	ctx.clearRect(0, 0, W, H);
	
	//loop through empty flakes and apply atts
	for(var i = 0; i < mf; i++){
		flakes.push({
			x: Math.random()*W, //set width of flake to random nr between 0 and 1 * width of screen
			y: Math.random()*H, //set height of flake to random nr between 0 and 1 * height of screen
			r: Math.random()*35+5, //set fontsize of '*' between 5 and 35
			d: Math.random() + 1
		})
	}

	//draw flakes
	function drawFlakes(){
		start++;
		// reduce clearing rectangle step by step to make snow grow at the bottom
		ctx.clearRect(0, 0, W, H - start/100);
		ctx.fillStyle = "White";
		ctx.beginPath();
		for(var i = 0; i < mf; i++){
			var f = flakes[i];
			ctx.moveTo(f.x, f.y);
			ctx.font = f.r + "px serif";
			ctx.fillText("*",f.x,f.y);
		}
		ctx.fill();
		moveFlakes();
	}

	var angle = 0;
	//move flakes
	function moveFlakes(){
		angle += 0.01;
		for(var i = 0; i < mf; i++){
			var f = flakes[i];
			f.y += Math.pow(f.d, 2) + 1;
			f.x += Math.cos(angle)*2;
			
			if(f.y > H){
				flakes[i] = {x: Math.random()*W, y: 0, r: f.r, d: f.d};
			}
		}
	}
	
	dfi = setInterval(drawFlakes, 25);
	return(dfi);
}

