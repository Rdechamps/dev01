<?php
	include("./models/functions.php");

	var_dump($_FILES);
	$error = false;
	$errorType = NULL;

	$maxPicSize = 300000000;										// Taille max en octets pour les miniatures
	
	$extensions = array('.png','.jpg','.jpeg','.gif','.PNG');						// Extensions acceptées
	
	$picDirectory = "static/img/pictures/";
	$thumbDirectory = "static/img/thumbs/";
	
	$pic = basename($_FILES['pic']['name']);
	$picSize = filesize($_FILES['pic']['tmp_name']);
	$picExt = strrchr($_FILES['pic']['name'], '.');
	
	if(!in_array(strtolower($picExt), $extensions)) {
		$error = true;
		$errorType = "ERR_TYPE";
	} else if($picSize > $maxPicSize) {
		$error = true;
		$errorType = "ERR_SIZE";
	}
	if(!$error)
	{
		
		if(move_uploaded_file($_FILES['pic']['tmp_name'], $picDirectory . $pic)) {
			imagethumb($picDirectory.$pic, $thumbDirectory."thumb".$pic, 100);
			header("Location:index.php");
		} else
			header("Location:index.php?error=ERR_UPLOAD");
			
	}
	else
		header("Location:index.php?error=".$errorType);
		
?>