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

	// Grid Slideouts

	$(".grid-cover").click(function(){
		$(".grid-slideout").animate({'height':'0px'},500,function(){
			$(".grid-slideout").css('display','none');
		});
		var screenwidth=$(window).width();
		var adjustwidth=screenwidth*(4/5);
		var adjustwidth=adjustwidth + 4;

		if ($(this).hasClass('grid-left-col')) {
			$('.grid-slideout-strip').css('margin-left','0px');
		}
		else if ($(this).hasClass('grid-mid-col')){
			$('.grid-slideout-strip').css('margin-left',"-"+adjustwidth+'px');
		}
		else if ($(this).hasClass('grid-right-col')){
			$('.grid-slideout-strip').css('margin-left',"-"+(2*adjustwidth)+'px');
		}

		if ($(this).hasClass("grid-top-row")) {
			$(".grid-top").animate({"height":"640px"},1000);
		}
		if ($(this).hasClass("grid-mid-row")) {
			$(".grid-middle").animate({"height":"640px"},1000);
		}
		if ($(this).hasClass("grid-bot-row")) {
			$(".grid-bottom").animate({"height":"640px"},1000);
		}
	});

	$(".grid-cover-vert").click(function(){
		$(".grid-slideout").animate({'height':'0px'},500,function(){
			$(".grid-slideout").css('display','none');
		});
		var screenwidth=$(window).width();
		var adjustwidth=screenwidth*(4/5);
		var adjustwidth=adjustwidth + 4;

		if ($(this).hasClass('grid-left-col')) {
			$('.grid-slideout-strip').css('margin-left','0px');
		}
		else if ($(this).hasClass('grid-mid-col')){
			$('.grid-slideout-strip').css('margin-left',"-" + adjustwidth+'px');
		}
		else if ($(this).hasClass('grid-right-col')){
			$('.grid-slideout-strip').css('margin-left',"-" + (2*adjustwidth)+'px');
		}

		if ($(this).hasClass("grid-top-row")) {
			$(".grid-top").animate({"height":"640px"},1000);
		}
		if ($(this).hasClass("grid-mid-row")) {
			$(".grid-middle").animate({"height":"640px"},1000);
		}
		if ($(this).hasClass("grid-bot-row")) {
			$(".grid-bottom").animate({"height":"640px"},1000);
		}
	});



	// Process Mobile Slide
	processsize();
	panelsize();

	window.onresize = function(event) {
		processsize();
		panelsize();
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

	function panelsize() {
		if ($(window).width() > 850) {
			var screenwidth=$(window).width();
			var adjustwidth=screenwidth*(4/5);
			var fivewidth=adjustwidth*4;
			$('.grid-slideout-panel').css('width',adjustwidth+"px");
			$('.grid-slideout-strip').css('width',fivewidth+"px");
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

	// Large size processes

	$('.process-history-icon').click(function(){
		if ($('.Stage1').css('margin-top') === "0px"){
		}
		else
		{
			$('.process').css('color','#ffffff');
			$('.one').css('color','#f38900');
			$('.process-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon.png")');
			$('.process-history-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon-selected.png")');
			$('.Stage1').css('margin-top','-385px');
			$('.process-panel').animate({'margin-top':'+=385px'},500,function(){
				$('.process-panel').css('margin-top','385px');
				$('.Stage1').css('margin-top','0px');
			});
			
		}
	});
	$('.process-growth-icon').click(function(){
		if ($('.Stage2').css('margin-top') === "0px"){
		}
		else
		{
			$('.process').css('color','#ffffff');
			$('.two').css('color','#f38900');
			$('.process-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon.png")');
			$('.process-growth-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon-selected.png")');
			$('.Stage2').css('margin-top','-385px');
			$('.process-panel').animate({'margin-top':'+=385px'},500,function(){
				$('.process-panel').css('margin-top','385px');
				$('.Stage2').css('margin-top','0px');
			});
			
		}
	});
	$('.process-distillation-icon').click(function(){
		if ($('.Stage3').css('margin-top') === "0px"){
		}
		else
		{
			$('.process').css('color','#ffffff');
			$('.three').css('color','#f38900');
			$('.process-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon.png")');
			$('.process-distillation-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon-selected.png")');
			$('.Stage3').css('margin-top','-385px');
			$('.process-panel').animate({'margin-top':'+=385px'},500,function(){
				$('.process-panel').css('margin-top','385px');
				$('.Stage3').css('margin-top','0px');
			});
			
		}
	});
	$('.process-aging-icon').click(function(){
		if ($('.Stage4').css('margin-top') === "0px"){
		}
		else
		{
			$('.process').css('color','#ffffff');
			$('.four').css('color','#f38900');
			$('.process-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon.png")');
			$('.process-aging-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon-selected.png")');
			$('.Stage4').css('margin-top','-385px');
			$('.process-panel').animate({'margin-top':'+=385px'},500,function(){
				$('.process-panel').css('margin-top','385px');
				$('.Stage4').css('margin-top','0px');
			});
			
		}
	});
	$('.process-infusion-icon').click(function(){
		if ($('.Stage5').css('margin-top') === "0px"){
		}
		else
		{
			$('.process').css('color','#ffffff');
			$('.five').css('color','#f38900');
			$('.process-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon.png")');
			$('.process-infusion-icon').css('background-image','url("http://localhost/wordpress/wp-content/themes/Bonfun/images/process-icon-selected.png")');
			$('.Stage5').css('margin-top','-385px');
			$('.process-panel').animate({'margin-top':'+=385px'},500,function(){
				$('.process-panel').css('margin-top','385px');
				$('.Stage5').css('margin-top','0px');
			});
			
		}
	});
});