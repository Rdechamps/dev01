<?php
	session_start();
	
	if(@$_SESSION['lang'] == NULL)
	{
		$_SESSION['lang'] = 'fr';
	}
	
	
	$ext = $_SERVER['REQUEST_URI'];
	$action = $_REQUEST['action'];
	
	switch($ext)
	{
		case "" :
			require_once("controllers/home.php");
		break;
		case "index.php" :
			require_once("controllers/home.php");
		break;
		default :
			require_once("controllers/home.php");
		break;
	}
	
?>