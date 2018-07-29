var angle = 0;

var slider;

var GLOBAL = 300;

function setup() {
  createCanvas(1000, 1000);
  slider = createSlider(0, 200, 0, 1);
}

function draw() {
	background(51);
	angle = slider.value();
	stroke(255);
	translate(200, height);
	branch(100);
}



function branch(len) {
	line(0, 0, 0, -len);
	translate(0, -len); // pivoting the center
	

	if( len > 3) {
		push();
		rotate(angle * GLOBAL%30); // 25 degrees
		GLOBAL ++;
		branch(len * 0.7);
		pop();
		push();
		rotate(-angle);
		if(GLOBAL%2)
		{
			branch(len * 0.1);
		}
		else
		{
			branch(len * 0.76);
		}
		pop();
	}

	
}