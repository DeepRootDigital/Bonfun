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
});