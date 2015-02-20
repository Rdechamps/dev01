<?php
	include("./models/functions.php");
	$linkToDelete = str_replace("\r\n","t",$_REQUEST['link']);
	deleteVideoLinks($linkToDelete);
	
	header("Location:index.php");
	
?>