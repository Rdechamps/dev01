// JavaScript Document

$(document).ready(function(e) {
	
    $(".header ul li a").bind("click", function(e){
		e.preventDefault();
		var lc = $(this).attr("id");
		var cc = "#"+lc+"-container";
		var st = $(cc).offset().top-90;
		var speed = 600; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: st }, speed).clearQueue();
	});
		
	$(".sec-container a").bind("click", function(){
		var c = $(this).attr("class");
		$(".toggle-container").load("views/"+c+".php");
		$(".toggle-container").css("left","0");
	});
	
});


/*

if($(window).width()<739){
	$(".menu-unstick").css({transform:"translateY(0)"})
}
$(window).scroll(function(){
	var e=$("#showHere");
	var t=e.offset();
	var t=$("#showHere").offset();
	if($(window).scrollTop()>t.top){
		$(".menu-unstick").addClass("stick");
		$(".page-index .menu-unstick img").css({opacity:"1"});
		if($(window).width()<739){
			$(".menu-unstick").css({transform:"translateY(0)"});
			$(".menu-text").css({animation:"bounce 1s forwards 1"})
		}
	}
	else if($(window).scrollTop()>t.top/2&&$(window).width()<739)
	{
		$(".menu-unstick").css({transform:"translateY(-100%)",position:"fixed"})
	}else{
		$(".menu-unstick").removeClass("stick");
		$(".page-index .menu-unstick img").css({opacity:"0"});
		if($(window).width()<739){
			$(".menu-unstick").css({transform:"translateY(0)",position:"inherit"})
		}
	}
});

var fenetre=$(window).width();
if($(window).width()<739){
	$(".menu-unstick").bind("tap",tapHandler);
	function tapHandler(e){$(".menu-unstick").toggleClass("on")}}*/