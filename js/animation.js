ran = function(min, max){
	return Math.floor(Math.random() * (max - min + 1)) + min;
};

/*
aniLoop = function(){

	$("#die-tun").velocity(
		{translateX: 0, translateY: ran(-3,3), rotateZ: ran(-3,3) },
	  	{
	  		//easing: [200, 8],
	    	duration: ran(1000,3000),
	    	loop: true
		}
	);
	
	$("#die-wollen").velocity(
		{ translateX: 0, translateY: ran(-3,3), rotateZ: ran(-3,3) },
	  	{
	    duration: ran(500,1000),
	    loop: 1
		}
	);

	$("#zwei-poetry").velocity(
		{ translateX: 0, translateY: ran(-5,5), rotateZ: ran(-3,3) },
	  	{ 
	    duration: ran(500,1000),
	    loop: true
		}
	);
	

	$("#stripe1").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-5,5), 
			rotateZ: ran(0,7) 
		},
		{ 
		   	duration: ran(1000,2000),
	    	loop: true
		}
	);

	$("#stripe2").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-5,5), 
			rotateZ: ran(-3,4) 
		},
		{ 
		   	duration: ran(1000,2000),
	    	loop: true
		}
	);

	$("#stripe3").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-5,5), 
			rotateZ: ran(-7,0) 
		},
		{ 
		   	duration: ran(1000,2000),
	    	loop: true
		}
	);

	$("#ralph").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-5,5), 
			rotateZ: ran(0,5) 
		},
		{ 
		   	duration: ran(1000,3000),
	    	loop: true
		}
	);	

	$("#michael").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-5,5), 
			rotateZ: ran(-5,0) 
		},
		{ 
		   	duration: ran(1000,3000),
	    	loop: true
		}
	);	

};

*/

aniLoop = function(){

	$("#die-tun").velocity(
		{translateX: 0, translateY: ran(-3,3), rotateZ: ran(-3,3) },
	  	{
	  		//easing: [200, 8],
	    	duration: 250,
	    	//loop: true
		}
	).velocity("reverse", { 
		duration: ran(1000,3000),
		easing: [200, 8]
	});
	
	$("#die-wollen").velocity(
		{ translateX: 0, translateY: ran(-3,3), rotateZ: ran(-3,3) },
	  	{
	    duration: 250,
	    //loop: 1
		}
	).velocity("reverse", { 
		duration: ran(1000,3000),
		easing: [200, 8]
	});

	$("#zwei-poetry").velocity(
		{ translateX: 0, translateY: ran(-5,5), rotateZ: ran(-3,3) },
	  	{ 
	    duration: 250,
	    //loop: true
		}
	).velocity("reverse", { 
		duration: ran(1000,3000),
		easing: [200, 8]
	});
	
	$("#stripe1").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-10,10), 
			rotateZ: ran(5,1) 
		},
		{ 
		   	duration: ran(1500,3000),
	    	loop: true
		}
	);

	$("#stripe2").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-10,10), 
			rotateZ: ran(-2,1) 
		},
		{ 
		   	duration: ran(1500,3000),
	    	loop: true
		}
	);

	$("#stripe3").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-10,10), 
			rotateZ: ran(1,-4) 
		},
		{ 
		   	duration: ran(1500,3000),
	    	loop: true
		}
	);


	$("#ralph").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-10,10), 
			rotateZ: ran(-4,0) 
		},
		{ 
		   	duration: ran(200,500),
	    	//loop: true
		}
	).velocity("reverse", { 
		duration: ran(1000,3000),
		easing: [200, 8]
	});	

	$("#michael").velocity(
		{ 
			translateX: 0, 
			translateY: ran(-10,10), 
			rotateZ: ran(0,4) 
		},
		{ 
		   	duration: ran(200,500),
	    	//loop: true
		}
	).velocity("reverse", { 
		duration: ran(1000,3000),
		easing: [200, 8]
	});	

};


$(window).on('load mousemove', debounce( 
	function(){
		//aniLoop();
	}, 500, true
));
