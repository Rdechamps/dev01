<?php
	include("backend/models/functions.php");
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
               <img class="arrow" id="arrow" src="static/img/animation/arrow.png" />
                
            </div>
        </div>
		<div class="introduction col col-4 tablet-col-1-2 mobile-col-11-12">
			<h1><strong><?php echo $content['main-title']; ?></strong></h1>
			<?php echo $content['intro-text-1']; ?>
            <a id="more-catalCAD" class="button" href="#"><?php echo $content['show-more']; ?></a><br><br>
		</div>
	</div>
	<div class="product sec-container col col-12" id="product-container">
		<div class="product-presentation col col-5 tablet-col-7 mobile-col-11-12">
			
            	<h1><strong><?php echo $content['product-title']; ?></strong></h1>
				<p><?php echo $content['product-text']; ?></p>
              
                <?php echo $content['product-caracteristics-1']; ?>
            
               
				<a id="more-SMO" class="button" href="#"><?php echo $content['show-more']; ?></a>
			
		</div>
		<div class="col col-5">
        	<img class="" src="static/img/packaging.png" alt="" title="">
		</div>
	</div>
	<div class="gallery sec-container col col-12" id="gallery-container">
    	<div class="gallery-txt col col-5 push-7 mobile-col-11-12 mobile-no-push">
        	<div class="tablet-full">
                <h1><strong><?php echo $content['gallery-title']; ?></strong></h1>
                <p><?php echo $content['gallery-text']; ?></p>
            </div>
            <div class="videos-container col col-12">
        	<?php getVideos(); ?>
        	</div>
		</div>
		<div class="pictures-container col col-7 pull-5 mobile-col-11-12 mobile-no-pull mobile-full">
			<div class="toto"><a href="static/img/gallery/pictures/truck.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_truck.jpg" alt="" title=""></a>
			<a href="static/img/gallery/pictures/mach-out.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_mach-out.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/boitier.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_boitier.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/capture1.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture1.jpg" alt="" title=""></a>
			<a href="static/img/gallery/pictures/capture2.png" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture2.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/capture3.png" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture3.jpg" alt="" title=""></a>
           </div>
            <div class="toto"> <a href="static/img/gallery/pictures/truck.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_truck.jpg" alt="" title=""></a>
			<a href="static/img/gallery/pictures/mach-out.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_mach-out.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/boitier.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_boitier.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/capture1.jpg" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture1.jpg" alt="" title=""></a>
			<a href="static/img/gallery/pictures/capture2.png" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture2.jpg" alt="" title=""></a>
            <a href="static/img/gallery/pictures/capture3.png" data-lightbox="gallery"><img class="" src="static/img/gallery/thumbs/v_capture3.jpg" alt="" title=""></a>
            </div>
		</div>		
	</div>
	<div class="business sec-container col col-12" id="business-container">
		<div class="sellers col col-5 tablet-col-11 mobile-col-11-12 mobile-full">
			<h1><strong><?php echo $content['sellers-title']; ?></strong></h1>
            <div id="map" class="mobile-full">
            </div>
            
		</div>
		<div class="references col col-5 tablet-col-11 mobile-col-12">
		<h1><strong><?php echo $content['references-title']; ?></strong></h1>
			<div class="partners mobile-col-12">
            	<ul>
                	<li><img src="./static/img/partners/logos/eiffage-energie.jpg" alt="Eiffage Énergie" title="Logo Eiffage Énergie"></li>
                    <li><img src="./static/img/partners/logos/schmidlin.jpg" alt="Schmidlin" title="Logo Schmidlin"></li>
                    <li><img src="./static/img/partners/logos/murata.jpg" alt="Murata" title="Logo Murata"></li>
                    <li><img src="./static/img/partners/logos/mitsubishi.jpg" alt="Mitsubishi" title="Logo Mitsubishi"></li>
                    <li><img src="./static/img/partners/logos/bouygues.jpg" alt="Bouygues" title="Logo Bouygues"></li>
                    <li><img src="./static/img/partners/logos/trumpf.jpg" alt="Trumpf" title="Logo Trumpf"></li>
                </ul>
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
	<a class="close-toggle" href="#">FERMER</a>
    <div class="receiver"></div>
</div>
<?php
	require_once("footer.php");
?>