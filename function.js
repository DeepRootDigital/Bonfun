$(document).ready(function(){

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
});