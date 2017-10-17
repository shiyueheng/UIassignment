
<canvas id="canvas"></canvas>



<style>
* {margin: 0; padding: 0; overflow: hidden}

canvas {background: black;}
</style>
<script type="text/javascript">

window.requestAnimFrame = (function(){
	return  window.requestAnimationFrame       || 
		window.webkitRequestAnimationFrame || 
		window.mozRequestAnimationFrame    || 
		window.oRequestAnimationFrame      || 
		window.msRequestAnimationFrame     || 
		function( callback ){
			window.setTimeout(callback, 1000 / 60);
		};
})();

var canvas = document.getElementById("canvas"),
		ctx = canvas.getContext("2d");

var W = window.innerWidth,
		H = window.innerHeight,
		text = "404！此功能尚未完善！",
		skipCount = 4,
		gravity = 0.2,
		touched = false,
		mouse = {},
		minDist = 20,
		bounceFactor = 0.6;

canvas.height = H;
canvas.width = W;

document.addEventListener("mousemove", trackPos, false);


function trackPos(e) {
	mouse.x = e.pageX;
	mouse.y = e.pageY;
}

var Particle = function() {
	this.r = Math.random() * 6;
	
	this.x = -100;
	this.y = -100;
	
	this.vy = -5 + parseInt(Math.random() * 10);
	this.vx = -5 + parseInt(Math.random() * 10);
		this.isFree = false;
	
	this.a = Math.random();
	

	this.draw = function() {
		ctx.beginPath();

		ctx.fillStyle = "rgba(255, 223, 0, " +this.a+")";
		ctx.arc(this.x, this.y, this.r, 0, Math.PI*2, false);
		ctx.fill();
		ctx.closePath();
	};

	this.setPos = function(x, y) {
		this.x = x;
		this.y = y;
	}
};

var particles = [];


(function drawText() {
	ctx.fillStyle = "black";
	ctx.font = "100px Arial, sans-serif";
	ctx.textAlign = "center";
	ctx.fillText(text, W/2, H/2);
})();


(function getPixelPos() {

	var imageData = ctx.getImageData(0, 0, W, W),
			data = imageData.data;

	for (var i = 0; i < imageData.height; i += skipCount) {
		for (var j = 0; j < imageData.width; j += skipCount) {
	
			
			var color = data[(j * imageData.width * 4) + (i * 4) - 1];

			if(color == 255) {
				particles.push(new Particle());
				particles[particles.length - 1].setPos(i, j);
			}
		}
	}
})();

function clear() {
	ctx.clearRect(0, 0, W, H);
}

function update() {
	clear();
	for (i = 0; i < particles.length; i++) {
		var p = particles[i];
		
	
		p.r += 0.15;
		p.a -= 0.015;
			
		if(p.a < 0) {
			p.r = Math.random() * 6;
			p.a = Math.random();
		}
	
		if(mouse.x > p.x - p.r && 
			 mouse.x < p.x + p.r &&
			 mouse.y > p.y - p.r &&
			 mouse.y < p.y + p.r)
			touched = true;
	
		
		if (touched == true) {
			var dist = Math.sqrt((p.x-mouse.x)*(p.x-mouse.x) + (p.y-mouse.y)*(p.y-mouse.y));
			
			if(dist <= minDist) 
				p.isFree = true;
			
			if(p.isFree == true) {
		
				p.y += p.vy;
				p.x += p.vx;

				p.vy += gravity;
		
				if(p.y + p.r > H) {
					p.vy *= -bounceFactor;
					p.y = H - p.r;
				
					if (p.vx > 0) 
						p.vx -= 0.1;
					else
						p.vx += 0.1;
				}
			
				if(p.x + p.r > W) {
					p.vx *= -bounceFactor;
					p.x = W - p.r;
				}
				
				if (p.x - p.r < 0) {
					p.vx *= -bounceFactor;
					p.x = p.r;
				}
			}
		}
		
		ctx.globalCompositeOperation = "lighter";
		p.draw();
	}
}

(function animloop(){
	requestAnimFrame(animloop);
	update();
})();
		</script>