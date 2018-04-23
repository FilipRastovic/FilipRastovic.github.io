$( document ).ready( function(e) {
	var keys = {}; 							
	$(document).keydown(function(event){	
		keys[event.which]=true;				
	}).keyup(function(event){				
		delete keys[event.which];			
	});

	// Canvas settings
	var settings = { width: 640, height: 480, fps: 30 };
	var images = {};
	var sounds = {};
	var keystate = {};
	$( "canvas" ).attr( "width", settings.width );
	$( "canvas" ).attr( "height", settings.height );
	
	var canvasWindow = $("canvas")[0].getContext( "2d" );
	
	// Loading Screen
	canvasWindow.fillStyle = "#666666";
	canvasWindow.fillRect( 0, 0, settings.width, settings.height );		
	canvasWindow.fillStyle = "#FFFFFF";
	canvasWindow.fillText( "Loading...", 10, 10 );
	
	
	objPlayer = { x: 320, y: 320, width:84, height: 100, speed: 10, score: 0 };
	objPickup = { x: 0, y: 0, width: 145, height: 145 };
	
	Setup();

	function Setup() {
		images.player = new Image();
		images.player.src = "assets/ana.png";
		
		images.grass = new Image();
		images.grass.src = "assets/Grass.png";
		
		images.pickup = new Image();
		images.pickup.src = "assets/marker.png";
		
		sounds.success = new Audio();
		sounds.success.src = "assets/success.wav";
		
		generatePickupCoords();
	
		setInterval( function() {

			Update();

			Draw();
			gameLoop();

		}, 1000 / settings.fps );	
	}
	
	function Update() {
		if ( 	objPlayer.x < objPickup.x + objPickup.width &&
				objPlayer.x + objPlayer.width > objPickup.x &&
				objPlayer.y < objPickup.y + objPickup.height &&
				objPlayer.y + objPlayer.height > objPickup.y )
		{
			// Collision
			generatePickupCoords();
			objPlayer.score += 1;
			sounds.success.play();	
		}
	}
	
	function Draw() {
		DrawBackground();
		DrawEntities();
		DrawHUD();
	}


	function gameLoop() {
		if(keys[38])
		{
			objPlayer.y -= objPlayer.speed;
		}
		else if(keys[40])
		{
			objPlayer.y += objPlayer.speed;
		}
		if(keys[37])
		{
			objPlayer.x -= objPlayer.speed;
		}
		else if(keys[39])
		{
			objPlayer.x += objPlayer.speed;
		}
	}
	
	/* Game Code */
	function DrawBackground() {
		for ( var y = 0; y < settings.height/64; y++ )
		{
			for ( var x = 0; x < settings.width/64; x++ )
			{
				canvasWindow.drawImage( images.grass, x*64, y*64 );
			}
		}
	}
	
	function DrawEntities() {		
		// Source x, y, w, h - Dest x, y, w, h
		canvasWindow.drawImage( images.pickup, 0, 0, 145, 145, objPickup.x, objPickup.y, objPickup.width, objPickup.height );
		
		canvasWindow.drawImage( images.player, objPlayer.x, objPlayer.y );
	}
	
	function DrawHUD() {
		canvasWindow.fillStyle = "#FFFFFF";
		canvasWindow.font = "20px Arial";
		if(objPlayer.score > 20)
			canvasWindow.fillText("OMG BOGATA SAM " + objPlayer.score, 15, 30);

		else if(objPlayer.score > 40)
			canvasWindow.fillText("OMAGAD!! " + objPlayer.score, 15,30);
		else
			canvasWindow.fillText( "Skupljeno Zlata: " + objPlayer.score, 15, 30);
	}
	
	function generatePickupCoords() {
		objPickup.x = Math.floor( Math.random() * settings.width - 145 );
		objPickup.y = Math.floor( Math.random() * settings.height - 145 );
	}

} );

