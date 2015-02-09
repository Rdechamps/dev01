// JavaScript Document



$(document).ready(function(e) {
    $(".header ul li a").bind("click", function(e){
		e.preventDefault();
		var lc = $(this).attr("id");
		var cc = "#"+lc+"-container";
		var st = $(cc).offset().top-90;
		var speed = 600; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: st }, speed).clearQueue();
        $(".header ul li a").removeClass('active');
        $(this).addClass('active');
	});
	
	
	
});

$(document).scroll(function(){
	$('.logo img').toggleClass('scrolled', $(this).scrollTop() > 150);
});