<?php
	session_start();
	
	if($_SESSION['lang'] == NULL)
	{
		$_SESSION['lang'] = 'fr';
	}
	if($_SESSION['contacted'] == NULL)
	{
		$_SESSION['contacted'] = "stand-by";
	}
	
	
	$ext = $_SERVER['REQUEST_URI'];
	
	
	if(!isset($_REQUEST['action']))
	{
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
	}
	else
	{
		$action = $_REQUEST['action'];
		switch($action)
		{
			case "fr" :
				require_once("controllers/french-version.php");
			break;
			case "en" :
				require_once("controllers/english-version.php");
			break;
		}
		
		
	}
	
?>