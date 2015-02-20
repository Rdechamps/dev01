<?php
	session_start();
	
	if(!isset($_SESSION['adminuser']) || $_SESSION['adminuser'] == NULL)
	{
		if(isset($_REQUEST['request']))
			$request = $_REQUEST['request'];
		else
			$request = NULL;
		switch($request)
		{
			case NULL :
				require("controllers/login.php");
				break;
			case "connection" :
				require("controllers/connection.php");
				break;
			default :
				require("controllers/login.php");
				break;
		}
	}
	else
	{
		if(isset($_REQUEST['action']))
			$action = $_REQUEST['action'];
		else
			$action = NULL;
		switch($action)
		{
			case "addPicture" :
				require("controllers/treatAddPic.php");
				break;
			case "delete" :
				require("controllers/deletePic.php");
				break;
			case "deleteLink" :
				require("controllers/deleteLink.php");
				break;
			case "disconnect" :
				require("controllers/disconnect.php");
				break;
			case "addVideo" :
				require("controllers/addVideo.php");
			default :
				require("controllers/adminPanel.php");
		}
	}

?>