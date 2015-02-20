<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Smart Network - Backend</title>
</head>

<body>
<div class="main-container">
    <div class="header">
    	<?php if(isset($_SESSION['adminuser']) || $_SESSION['user'] != NULL){ ?>
        	<h1>catalCAD - Administration Panel</h1>
        	<a href="index.php?action=disconnect">Disconnect</a>
		<?php } ?>
    </div>
