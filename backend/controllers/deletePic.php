<?php
	$toDelete = $_REQUEST['pic'];
	$thumbToDelete = "thumb".$_REQUEST['pic'];
	$picDirectory = "static/img/pictures/";
	$thumbDirectory = "static/img/thumbs/";
	unlink($picDirectory.$toDelete);
	unlink($thumbDirectory.$thumbToDelete);
	header("Location:index.php");
	
	
?>