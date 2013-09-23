jQuery(document).ready(function(){

	var $ = jQuery;
	
	//AgeGateWay Code 
	
	function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
	
	$('.yes').click(function() {
		$('.lightbox-agegate').hide();	
		$('.lightbox-overlay').hide();	
		createCookie('ageGateWay','true',99);
	});

// Circle of fun
$('.circle-of-fun').click(function(){
     $('.lightbox-circle').show();
     $('.lightbox-overlay-circle').show();
});

$('.lightbox-overlay-circle').click(function(){
     $('.lightbox-circle').hide();
     $('.lightbox-overlay-circle').hide();
});

	//Homepage Slider Area

	$('.pull').click(function() {
		$('.nav-menu').toggle();
	});

	$(".carousel").CloudCarousel(		
	{			
		xPos: 128,
		yPos: 15,
		xRadius: 65,
		yRadius: -10,
		autoRotate: 'left',
		autoRotateDelay: 3000,
		bringToFront: true,
	});

	$(function() {
		$('.slider ul li').hide();
		$('.slider ul li:first').fadeIn('slow');
		$('.slider li').click(function() {
			$('.slider ul li').hide();
			$('.slider ul li:last').fadeIn('slow');
			$('.slider ul li:first').before($('.slider ul li:last'));
		});
	});

         $('.slider li').hover(function(){ 
             $(this).find('.arrow-next').attr('src', '/wp-content/themes/Bonfun/images/slider_arrow.png');
           }, function() {
                  $(this).find('.arrow-next').attr('src', '/wp-content/themes/Bonfun/images/slider_arrow_default.png');
         });

	
	//Process Area
        		

	$('.process-button').click(function() {
		if ($('.process-content').css('display') === "block"){
$('.process-navigation-left').css('display','none');
$('.process-navigation-right').css('display','none');
			$('.process-content').animate({"height":"0px"},600,function(){
$('.process-content').css("display","none");

});
		}
		else {
			$('.process-content').css("display","block");
			$('.process-content').animate({"height":"400px"},600,function(){
$('.process-navigation-left').css('display','block');
$('.process-navigation-right').css('display','block');
});
		}
	});

	$(window).scroll(function() {
		if ($('.process-area').hasClass('false')) {
			$('.process-content').css("display","block");
			$('.process-content').animate({"height":"400px"},600,function(){
$('.process-navigation-left').css('display','block');
$('.process-navigation-right').css('display','block');
});
			$('.container').css("display","block");
			$('.process-area').removeClass('false');
		}

	});

	$('.action-button.history').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').animate({"marginTop":"400px"},200);
		$('.process-panel').fadeOut('fast');
		$('.process-panel.history').fadeIn('fast');
		$('.process-panel').animate({"marginTop":"60px"},200);
	});

	$('.action-button.growth').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').animate({"marginTop":"400px"},200);
		$('.process-panel').fadeOut('fast');
		$('.process-panel.growth').fadeIn('fast');
		$('.process-panel').animate({"marginTop":"60px"},200);
	});

	$('.action-button.distillation').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').animate({"marginTop":"400px"},200);
		$('.process-panel').fadeOut('fast');
		$('.process-panel.distillation').fadeIn('fast');
		$('.process-panel').animate({"marginTop":"60px"},200);
	});

	$('.action-button.aging').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').animate({"marginTop":"400px"},200);
		$('.process-panel').fadeOut('fast');
		$('.process-panel.aging').fadeIn('fast');
		$('.process-panel').animate({"marginTop":"60px"},200);
	});

	$('.action-button.wine').click(function() {
		$('.action-button').removeClass('active');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
		else {
			$(this).removeClass('active');
		}
		$('.process-panel').animate({"marginTop":"400px"},200);
		$('.process-panel').fadeOut('fast');
		$('.process-panel.wine').fadeIn('fast');
		$('.process-panel').animate({"marginTop":"60px"},200);
	});

function processtabletfix() {
        var windowwidth = $(window).width();
        if (windowwidth < 960 && windowwidth > 380) {
              $(".process-panel").css("width",windowwidth+"px");
              $(".process-panel-wrap").css("width",windowwidth*7+"px");
$(".swipe-wrap").css("width",windowwidth*7+"px");
$(".swipe-wrap").css("margin-left","0px");
        }
        if (windowwidth >960) {
             $(".process-panel").css("width","350px");
             $(".swipe-wrap").css("width","");
             $(".swipe-wrap").css("margin-left","");
        }
        }

// Grid Display

processtabletfix();

function gridBuffer() {
	$('.grid-slideout').fadeOut();
	$('.grid-row').css( "margin-top", "0px" );
}

function menufix() {
        if ($(window).width() > 960) {
                $('.nav-menu').css('display','block');
        }
        if ($(window).width() < 960) {
                $('.nav-menu').css('display','none');
        }
        $('.product-summary-slider-strip').css('margin-left','0px');
}

$(window).resize(function(){
	gridBuffer();
        menufix();
processtabletfix()
});

//Link Fix
$('.grid-overlay h3 a').click(function(e) {
 if ($(window).width() > 960) {
    e.preventDefault();
    //return false;
    }
});


$('.grid-overlay').hover(
	function() {
		$(this).animate({width:'100%'});
		$(this).animate({height:'100%'},function() {
		$(this).find('ul').fadeIn();
		$(this).find('.o-ring').fadeIn();
		});
		
	},
	function() {	
		if ($(this).hasClass('vertical')) {
			var ogWidth = '160px';
			var ogHeight = '100%';
			$(this).animate({width: ogWidth},100,function(){
                $(this).find('ul').hide();	
		$(this).find('.o-ring').hide();
});
			$(this).animate({height: ogHeight},100,function(){
                $(this).find('ul').hide();	
		$(this).find('.o-ring').hide();
});
		}
		if ($(this).hasClass('horizontal')) {
			var ogWidth = '100%';
			var ogHeight = '50%';
			$(this).animate({width: ogWidth},100,function(){
                $(this).find('ul').hide();	
		$(this).find('.o-ring').hide();
});
			$(this).animate({height: ogHeight},100,function(){
                $(this).find('ul').hide();	
		$(this).find('.o-ring').hide();
});
		}
	});

$('.grid-overlay').click(function() {
	$(this).animate({width:'100%'});
	$(this).animate({height:'100%'});
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

// Wine Slider

$('.product-slide-left').click(function(){
       $('.product-summary-slider-strip').animate({'margin-left':'+=300px'},300);
});

$('.product-slide-right').click(function(){
       $('.product-summary-slider-strip').animate({'margin-left':'-=300px'},300);
});

// Process mobile slider

$('.process-navigation-left').click(function(){
    if ($(window).width() < 380) {
        if ($(".swipe-wrap").css('margin-left') == "0px"){
        }
        else {
          $(".swipe-wrap").animate({'margin-left':'+=320px'},300);
        }
    }
    if ($(window).width() > 380 && $(window).width() < 960 ) {
        if ($(".swipe-wrap").css('margin-left') == "0px"){
        }
        else {
          $(".swipe-wrap").animate({'margin-left':'+='+$(window).width()+'px'},300);
        }
    }
});

$('.process-navigation-right').click(function(){
if ($(window).width() < 380) {
        if ($(".swipe-wrap").css('margin-left') == "-1280px"){
        }
        else {
          $(".swipe-wrap").animate({'margin-left':'-=320px'},300);
        }
    }

    if ($(window).width() > 380 && $(window).width() < 960 ) {
    if ($(".swipe-wrap").css('margin-left') == "-"+$(window).width()*4+"px"){
    }
    else {
      $(".swipe-wrap").animate({'margin-left':'-='+$(window).width()+'px'},300);
    }
    }
});

// Nav hover menu

$('.nav-menu ul li').hover(function(){
  $(this).find('.sub-menu').css('display','block');
},function(){
      if ($(window).width() > 960) {
          $(this).find('.sub-menu').css('display','none');
      }
});

// Events Slider

$(function(){
     setInterval(function() {
         $('.slideWrap').find('.dp_pec_date_event').last().fadeOut(800,function(){
             $('.slideWrap').find('.dp_pec_date_event').first().appendTo('.slideWrap .dp_pec_content');
         });
     }, 5000);
});

//Blog Slider

$(function() {
		$('.blog-slider .slide').hide();
		$('.blog-slider .slide:first').fadeIn('slow');
		setInterval(function() {
			$('.blog-slider .slide').hide();
			$('.blog-slider .slide:last').fadeIn('slow');
			$('.blog-slider .slide:first').before($('.blog-slider .slide:last'));
		}, 3000);
	});

});