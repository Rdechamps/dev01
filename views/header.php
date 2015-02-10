<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>catalCAD - CAO tôlerie</title>

<link rel="stylesheet" href="static/css/style.css">

<link rel="stylesheet" href="static/css/custom.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<?php include("static/lang/".$_SESSION['lang']."/lang-".$_SESSION['lang'].".php"); ?>

<div class="header col col-12 mobile-full">
	<div  class="toggle-menu"><a href="#"><img width="40" height="40" src="static/img/burger.jpg"></a></div>
    <ul class="menu-list col col-7 push-5 ">

        <li><a id="presentation" href="#" class="active"><?php echo $content['menu-item-1']; ?></a></li>

        <li><a id="product" href="#"><?php echo $content['menu-item-2']; ?></a></li>

        <li><a id="gallery" href="#"><?php echo $content['menu-item-3']; ?></a></li>

        <li><a id="business" href="#"><?php echo $content['menu-item-4']; ?></a></li>

        <li><a id="contact" href="#"><?php echo $content['menu-item-5']; ?></a></li>
        
         <div class="col col-1 push-4">
    
            <a href="index.php?action=fr"><img title="French" alt="French" height="25" width="25" src="static/img/icons/France.png"></a>
            
            <a href="index.php?action=en"><img title="English" alt="English" height="25" width="25" src="static/img/icons/UK.png"></a>
        
    	</div>

    </ul>
    <div class="change-lang col col-1 push-4 no-mobile">
    
    	<a href="index.php?action=fr"><img title="French" alt="French" height="25" width="25" src="static/img/icons/France.png"></a>
        
    	<a href="index.php?action=en"><img title="English" alt="English" height="25" width="25" src="static/img/icons/UK.png"></a>
        
    </div>
</div>
    <div class="logo col col-2"><img src="static/img/logo.jpg" alt="CatalCAD" title="CatalCAD" /></div>