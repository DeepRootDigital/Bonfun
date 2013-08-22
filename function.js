$(document).ready(function(){

	$('.pull').click(function() {
		$('.nav-menu').toggle();
	});

	$('.process-button').click(function() {
		if ($('.process-content').css('height') === "395px"){
			$('.container').css("display","none");
			$('.grid-area').animate({'margin-top':'-86px'},500);
			$('.process-content').animate({"height":"0px"},500,function(){
				$('.process-content').css("display","none");
			});
		}
		else {
			$('.process-content').css("display","block");
			$('.process-content').animate({"height":"395px"},500);
			$('.container').css("display","block");
			$('.grid-area').css('margin-top','0px');
		}
		
	});

	$(".carousel").CloudCarousel(		
	{			
		xPos: 128,
		yPos: 32,
		xRadius: 52,
		yRadius: 32,
		autoRotate: 'left',
		autoRotateDelay: 3000,
		bringToFront: true,
	});

	$(".grid-cover").hover(
		function(){
			$(this).animate({"width":"100%"},500);	
			$(this).find(".dotted-shadow").css("display","block");
		},
		function(){
			$(this).find(".dotted-shadow").css("display","none");
			$(this).animate({"width":"33.33%"},500);
		});

	$(".grid-cover-vert").hover(function(){
		$(this).animate({"height":"100%"},500);
		$(this).find(".dotted-shadow").css("display","block");	
	},
	function(){
		$(this).find(".dotted-shadow").css("display","none");
		$(this).animate({"height":"50%"},500);	
	});

	$(".grid-cover").click(function(){
		$(".grid-slideout").animate({'height':'0px'},500);
		if ($(this).hasClass("grid-top-row")) {
			$(".grid-top").animate({"height":"640px"},1000);
		}
	});



	// Process Mobile Slide
	processsize();

	window.onresize = function(event) {
		processsize()
	}

	var slidenumber = 1;

	function processsize() {
		if ($(".process-viewport").width() < 850) {
			var screenwidth = $(window).width();
			var fivewidth = screenwidth * 6;
			$(".process-panel-string").css('width',fivewidth + "px");
			$('.process-panel').css('width',screenwidth+"px");
			$('.process-panel-string').css('margin-left',"-" + ((slidenumber * screenwidth) - screenwidth) + "px");
		}
	}

	$(".process-small-nav-left").click(function(){
		var panelwidth = $('.process-panel').width();
		slidenumber -= 1;

		$('.process-panel-string').animate({'margin-left':'+='+panelwidth+'px'},500);
	});

	$(".process-small-nav-right").click(function(){
		var panelwidth = $('.process-panel').width();
		slidenumber += 1;

		$('.process-panel-string').animate({'margin-left':'-='+panelwidth+'px'},500);
	});

	// Make content draggable
	$( ".process-panel-string" ).draggable({ axis: "x" });


});