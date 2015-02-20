<?php include("models/functions.php"); ?>
<?php include("views/_header.php"); ?>
<div class="main-panel">
	<?php getPictures(); ?>
    <?php getVideoLinks(); ?>
    
    <form action="index.php?action=addVideo" method="post" autocomplete="off">
    	<fieldset>
        	<input type="text" name="link" placeholder="VIDEO LINK"><input type="submit" value="ADD VIDEO">
        </fieldset>    	
    </form>
    
</div>