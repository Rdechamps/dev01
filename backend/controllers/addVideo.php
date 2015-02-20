<?php
	include("./models/functions.php");
	$link = $_POST['link'];
	
	setVideoLinks($link);
	header("Location:index.php");
?>