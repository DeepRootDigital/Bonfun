jQuery(document).ready(function(){

	var $ = jQuery;

	$('.pull').click(function() {
		$('.nav-menu').toggle();
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

	//Process Area

	$('.process-button').click(function() {
		if ($('.process-content').css('height') === "400px"){
			$('.container').css("display","none");
			$('.grid-area').animate({'margin-top':'-86px'},500);
			$('.process-content').animate({"height":"0px"},500,function(){
				$('.process-content').css("display","none");
			});
		}
		else {
			$('.process-content').css("display","block");
			$('.process-content').animate({"height":"400px"},500);
			$('.container').css("display","block");
			$('.grid-area').css('margin-top','0px');
		}
	});

	$(window).scroll(function() {
		$('.process-content').css("display","block");
		$('.process-content').animate({"height":"400px"},500);
		$('.container').css("display","block");
		$('.grid-area').css('margin-top','0px');
	});

	$('.action-button.history').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').fadeOut();
		$('.process-panel.history').fadeIn();
	});

	$('.action-button.growth').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').fadeOut();
		$('.process-panel.growth').fadeIn();
	});

	$('.action-button.distillation').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').fadeOut();
		$('.process-panel.distillation').fadeIn();
	});

	$('.action-button.aging').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').fadeOut();
		$('.process-panel.aging').fadeIn();
	});

	$('.action-button.wine').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').fadeOut();
		$('.process-panel.wine').fadeIn();
	});


//Swipe Elements
var elem = document.getElementById('panel-wrap');
window.mySwipe = Swipe(elem, {
	startSlide: 4,
	auto: 3000,
	continuous: true,
});






// Grid Display

function gridBuffer() {
	$('.grid-slideout').fadeOut();
	$('.grid-row').css( "margin-top", "0px" );
}

$(window).resize(function(){
	gridBuffer();
});


$('.grid-overlay').hover(
	function() {
		$(this).animate({width:'100%'});
		$(this).animate({height:'100%'});
	},
	function() {
		if ($(this).hasClass('vertical')) {
			var ogWidth = '160px';
			var ogHeight = '100%';
			$(this).animate({width: ogWidth},100);
			$(this).animate({height: ogHeight},100);
		}
		if ($(this).hasClass('horizontal')) {
			var ogWidth = '100%';
			var ogHeight = '50%';
			$(this).animate({width: ogWidth},100);
			$(this).animate({height: ogHeight},100);
		}		
	});


$('.grid-object.left').click(function() {
	gridBuffer();
	if ($(this).parent().find('.grid-slideout.left').css("display") === "none") {	
		if ($(window).width() <= 960){		
			$(this).parent('.grid-row').css( "margin-top", "280px" );
		}
		else {
			$(this).parent('.grid-row').css( "margin-top", "640px" );
		}	
		$(this).parent().find('.grid-slideout.left').fadeIn();
	}
	else {
		$('.grid-slideout').fadeOut();
		$(this).parent('.grid-row').css( "margin-top", "0px" );
		$(this).parent().find('.grid-slideout.left').fadeOut();
	}
});

$('.grid-object.mid').click(function() {
	gridBuffer();
	if ($(this).parent().find('.grid-slideout.mid').css("display") === "none") {		
		if ($(window).width() <= 960){		
			$(this).parent('.grid-row').css( "margin-top", "280px" );
		}
		else {
			$(this).parent('.grid-row').css( "margin-top", "640px" );
		}	
		$(this).parent().find('.grid-slideout.mid').fadeIn();
	}
	else {
		$('.grid-slideout').fadeOut();
		$(this).parent('.grid-row').css( "margin-top", "0px" );
		$(this).parent().find('.grid-slideout.mid').fadeOut();
	}
});

$('.grid-object.right').click(function() {
	gridBuffer();
	if ($(this).parent().find('.grid-slideout.right').css("display") === "none") {		
		if ($(window).width() <= 960){		
			$(this).parent('.grid-row').css( "margin-top", "280px" );
		}
		else {
			$(this).parent('.grid-row').css( "margin-top", "640px" );
		}	
		$(this).parent().find('.grid-slideout.right').fadeIn();
	}
	else {
		$(this).parent('.grid-row').css( "margin-top", "0px" );
		$(this).parent().find('.grid-slideout.right').fadeOut();
	}
});


});