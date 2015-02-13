<?php
	require_once("header.php");
?>

<div class="main-container col-12 mobile-full">
    
	<div class="presentation sec-container col col-12" id="presentation-container">
		<div class="pres-img col col-6 tablet-col-5 no-mobile">
           <div class="scene">
                <img class="pliage" src="static/img/animation/pliage.png" />
                <img class="base" id="base" src="static/img/animation/base.png" />
                <img class="front" id="front" src="static/img/animation/front.png" />
                <img class="spot1" id="spot1" src="static/img/animation/spot1.png" />
                <img class="spot2" id="spot2" src="static/img/animation/spot2.png" />
                <img class="spot3" id="spot3" src="static/img/animation/spot3.png" />
                
            </div>
        </div>
		<div class="introduction col col-4 tablet-col-1-2 mobile-col-11-12">
			<h1><strong><?php echo $content['main-title']; ?></strong></h1>
			<p><?php echo $content['intro-text-1']; ?></p>
                 <a id="more-catalCAD" class="button" href="#"><?php echo $content['show-more']; ?></a><br><br>
		</div>
	</div>
        
	<div class="product sec-container col col-12" id="product-container">
		<div class="product-presentation col col-5 mobile-col-11-12">
			
            	<h1><strong><?php echo $content['product-title']; ?></strong></h1>
				<p><?php echo $content['product-text']; ?></p>
              
                <?php echo $content['product-caracteristics-1']; ?>
            
               
				<a id="more-SMO" class="button" href="#"><?php echo $content['show-more']; ?></a>
			
		</div>
		<div class="col col-5">Packaging
		</div>
	</div>
        
	<div class="gallery sec-container col col-12" id="gallery-container">
    	<div class="gallery-txt col col-5 push-7 mobile-col-11-12 mobile-no-push">
			<h1><strong><?php echo $content['gallery-title']; ?></strong></h1>
			<p><?php echo $content['gallery-text']; ?></p>
		</div>
		<div class="pictures-container col col-7 pull-5 mobile-col-11-12 mobile-no-pull mobile-full">
        	 <img class="" src="static/img/gallery/vignettes/v_truck.jpg" alt="" title="">
            <img class="" src="static/img/gallery/vignettes/v_mach-out.jpg" alt="" title="">
            <img class="" src="static/img/gallery/vignettes/v_boitier.jpg" alt="" title="">
            <img class="" src="static/img/gallery/vignettes/v_capture1.jpg" alt="" title="">
            <img class="" src="static/img/gallery/vignettes/v_capture2.jpg" alt="" title="">
            <img class="" src="static/img/gallery/vignettes/v_capture3.jpg" alt="" title="">
<iframe width="30%"  src="https://www.youtube.com/embed/JH_cvYAtd4Q" frameborder="0" allowfullscreen></iframe>
            <iframe width="30%"  src="https://www.youtube.com/embed/O7lVq_w5ZWY" frameborder="0" allowfullscreen></iframe>
            <iframe width="30%"  src="https://www.youtube.com/embed/xvCwLdG6aio" frameborder="0" allowfullscreen></iframe>
           
          
        </div>
		
	</div>
        
	<div class="business sec-container col col-12" id="business-container">
		<div class="sellers col col-5 mobile-col-11-12 mobile-full">
			<h1><strong><?php echo $content['sellers-title']; ?></strong></h1>
            <div class="map mobile-full">
            	<iframe src="https://mapsengine.google.com/map/embed?mid=zVgZocOhbKcs.koZt-96vK6jo" width="640" height="640"></iframe>
            </div>
		</div>
		<div class="references col col-5 mobile-col-11-12">
		<h1><strong><?php echo $content['references-title']; ?></strong></h1>
			<div class="partners mobile-full">
            
            </div>
		</div>
	</div>
	<div class="contact sec-container col col-12" id="contact-container">
		<h1><strong><?php echo $content['contact-title']; ?></strong></h1>
        <form id="contact_form" class="col col-5 <?php echo $_SESSION['contacted']; ?> mobile-col-11-12" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
        	<fieldset>
            	<input type="text" name="name" id="name" placeholder="<?php echo $content['form-ph-1']; ?>" required>
                <input type="text" name="first_name" id="first_name" placeholder="<?php echo $content['form-ph-2']; ?>" required>
                <input type="text" name="society" id="society" placeholder="<?php echo $content['form-ph-3']; ?>" required>
            </fieldset>
            <fieldset>
            	<input type="text" name="phone" id="phone" maxlength="10" placeholder="<?php echo $content['form-ph-4']; ?>" required >
                <input type="text" name="mail" id="mail" placeholder="<?php echo $content['form-ph-5']; ?>" required >
                <input type="text" name="country" id="country" placeholder="<?php echo $content['form-ph-6']; ?>" required >
            </fieldset>
            <fieldset>
            	<textarea name="message" id="message" placeholder="<?php echo $content['form-ph-7']; ?>"></textarea>
            </fieldset>
            <fieldset>
            	<input class="button" type="submit" value="ENVOYER">
                <input class="button" type="reset" value="RAFRAICHIR">
            </fieldset>
        </form>
        <div class="contact_details col col-5 mobile-col-3-4">
        <?php echo $content['contact-details']; ?>
        </div>
	</div>
</div>

<div class="toggle-container"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="static/js/jquery.mobile.custom.min.js"></script>
<script src="static/js/click_events.js"></script>
<script src="static/js/sendMail.js"></script>
<script type="application/javascript">
    
		if($(window).width()>1024)
		{
			$(".sec-container div a").bind("click", function(){
				var c = $(this).attr("id");
				$(".toggle-container").load("views/<?php echo $_SESSION['lang']; ?>/"+c+".php .more-container", true);
				$(".toggle-container").css("left","0");
				$("html, body").css("overflow-y","hidden");
			});
			
		}
		else
		{
			$(".sec-container div a").bind("tap", function(){
				var c = $(this).attr("id");
				$(".toggle-container").load("views/<?php echo $_SESSION['lang']; ?>/"+c+".php .more-container", true);
				$(".toggle-container").css("left","0");
				$("html, body").css("overflow","hidden");
			});
		}
		
    
</script> 
<script>
	$(document).ready(function(e) {
        $(".toggle-menu").bind("tap", function(e){
			$(".menu-list").toggleClass("toggle-mobile-menu");
		});
    });
</script>
<script>
$('.base, .front, .spot1, .spot2').delay(8000).queue(function(){
    $(this).addClass('animation-reverse');
});

    
      $('.spot3').delay(9000).queue(function(){
                       setTimeout(function() {
      $('.spot3').addClass('stay');
}, 1000);
  $(this).addClass('animation-spot3');
 
        });
  

    
      $('.pliage').delay(13000).queue(function(){
  $(this).addClass('stay');
});

</script> 
</body>
</html>