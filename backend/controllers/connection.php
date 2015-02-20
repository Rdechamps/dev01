<?php
	$login = $_POST['login'];
	$pwd = $_POST['pwd'];
	
	if($login == NULL || $login != "toto")
		header("Location:index.php?request=ERR_LOG");
	else if($pwd == NULL || $pwd != "admin")
		header("Location:index.php?request=ERR_PWD");
	else
	{
		$_SESSION['adminuser'] = $login;
		header("Location:index.php");	
	}

?>