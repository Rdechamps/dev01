<?php
	require_once("header.php");
	include("static/lang/".$_SESSION['lang']."/lang-".$_SESSION['lang'].".php");
?>

<div class="main-container col-12">
    
	<div class="presentation sec-container col col-12" id="presentation-container">
		<img class="pres-img col col-5" src="" alt="Photo test" title="">
		<div class="introduction col col-7">
			<h1><strong><?php echo $content['main-title']; ?></strong></h1>
			<p><?php echo $content['intro-text-1']; ?></p>
            <p><?php echo $content['intro-text-2']; ?></p>
            <p><?php echo $content['intro-text-3']; ?></p>
			<p><?php echo $content['intro-text-4']; ?></p>
            <p><?php echo $content['intro-text-5']; ?></p>
            <a class="more-catalCAD.php button" href="#"><?php echo $content['show-more']; ?></a><br><br>
		</div>
	</div>
        
	<div class="product sec-container col col-12" id="product-container">
		<div class="product-presentation col col-7">
			<div>
            	<h2><strong><?php echo $content['product-title']; ?></strong></h2>
				<p><?php echo $content['product-text']; ?></p>
                <ul>
                    <li><?php echo $content['product-caracteristics-1']; ?></li>
                    <li><?php echo $content['product-caracteristics-2']; ?></li>
                    <li><?php echo $content['product-caracteristics-3']; ?></li>
                    <li><?php echo $content['product-caracteristics-4']; ?></li>
                    <li><?php echo $content['product-caracteristics-5']; ?></li>
                </ul>
				<a class="more-SMO" href="#"><?php echo $content['show-more']; ?></a>
			</div>
		</div>
		<div class="col col-5">Packaging
		</div>
	</div>
        
	<div class="gallery sec-container col col-12" id="gallery-container">
		<div class="pictures-container col col-7">
        	<img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
            <img src="static/img/temp.jpg" alt="" title="">
        </div>
		<div class="gallery-txt col col-5">
			<h2><strong><?php echo $content['gallery-title']; ?></strong></h2>
			<p><?php echo $content['gallery-text']; ?></p>
		</div>
	</div>
        
	<div class="business sec-container col col-12" id="business-container">
		<div class="sellers col col-5">
			<h2><strong><?php echo $content['sellers-title']; ?></strong></h2>
            <div class="map">
            	<iframe src="https://mapsengine.google.com/map/embed?mid=zVgZocOhbKcs.koZt-96vK6jo" width="640" height="500"></iframe>
            </div>
		</div>
		<div class="references col col-5">
			<h2><strong><?php echo $content['references-title']; ?></strong></h2>
			<div class="partners">
            
            </div>
		</div>
	</div>
	<div class="contact sec-container col col-12" id="contact-container">
		<h2><strong><?php echo $content['contact-title']; ?></strong></h2>
        <form id="contact_form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
        	<fieldset class="col col-3">
            	<input type="text" name="name" id="name" placeholder="<?php echo $content['form-ph-1']; ?>" required autofocus>
                <input type="text" name="first_name" id="first_name" placeholder="<?php echo $content['form-ph-2']; ?>" required autofocus>
                <input type="text" name="society" id="society" placeholder="<?php echo $content['form-ph-3']; ?>" required autofocus>
            </fieldset>
            <fieldset class="col col-3">
            	<input type="text" name="phone" id="phone" maxlength="10" placeholder="<?php echo $content['form-ph-4']; ?>" required autofocus>
                <input type="text" name="mail" id="mail" placeholder="<?php echo $content['form-ph-5']; ?>" required autofocus>
                <input type="text" name="country" id="country" placeholder="<?php echo $content['form-ph-6']; ?>" required autofocus>
            </fieldset>
            <fieldset class="col col-3">
            	<textarea name="message" id="message" placeholder="<?php echo $content['form-ph-7']; ?>"></textarea>
            </fieldset>
            <fieldset class="col col-3">
            	<input type="submit" value="ENVOYER">
                <input type="reset" value="RAFRAICHIR">
            </fieldset>
        </form>
	</div>
</div>

<div class="toggle-container">
	<a class="close-toggle" href="#" onClick="$('.toggle-container').css('left','100%;')">FERMER</a>
    
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../static/js/click_events.js"></script>
<script src="../static/js/sendMail.js"></script>
<!--<script>
$(document).ready(function(){
	var lang = "<?php echo $_SESSION['lang']; ?>";
	$(".sec-container a").bind("click", function(e){
		
        var c = $(this).attr("class");
        
		$(".toggle-container").load("views/"+c+" #more-container");
		$(".toggle-container").css("left","0");
		
	});
	
});
</script>-->

</body>
</html>