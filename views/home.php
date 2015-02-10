<?php
	require_once("header.php");
	include("static/lang/".$_SESSION['lang']."/lang-".$_SESSION['lang'].".php");
?>

<div class="main-container col-12 mobile-full">
    
	<div class="presentation sec-container col col-12" id="presentation-container">
		<img class="pres-img col col-6 no-mobile" src="" alt="Photo test" title="">
		<div class="introduction col col-4 mobile-col-11-12">
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
        	<img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
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

<div class="toggle-container">
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="static/js/click_events.js"></script>
<script src="static/js/sendMail.js"></script>
<script>
    $(".sec-container div a").bind("click", function(){
		if($(window).width()>1024)
		{
			var c = $(this).attr("id");
			$(".toggle-container").load("views/<?php echo $_SESSION['lang']; ?>/"+c+".php .more-container");
			$(".toggle-container").css("left","0");
			$("body").css("overflow-y","hidden");
		}
		else
		{
			var c = $(this).attr("id");
			$(".toggle-container").load("views/<?php echo $_SESSION['lang']; ?>/"+c+".php .more-container");
		}
    });
</script> 
<script>
	$(document).ready(function(e) {
        $(".toggle-menu").on("click", function(e){
			$(".header ul").css("left","0");
		});
    });
</script>

</body>
</html>