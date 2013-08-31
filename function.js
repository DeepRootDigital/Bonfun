$(document).ready(function(){

	$('.pull').click(function() {
		$('.nav-menu').toggle();
	});

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


// pure JS
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