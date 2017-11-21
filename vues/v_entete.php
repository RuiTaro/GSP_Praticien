<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Praticiens</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
<div id="wrapper"> 
	<div id="header">
		<div id="logo">
			<h1><a href="index.php"></a></h1>
		</div>
		<div id="slogan">
			<div name="haut"><h1><span><a href="index.php?uc=accueil"><img src="images/logo.jpg" width="100" height="60"/></a></span>
			<!-- <div name="gauche" style="float:left;width:100%; background-color:transparent; height:100%;"></div> -->
			<?php If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
				{ 
				echo '<a class="btn" href="index.php?uc=administrer&action=deconnexion"><img src="images/deco.png" style="width: 170px; margin-left: 80%;"/></a>';
				}else{
				echo '<a class="btn" href="index.php?uc=administrer&action=connexion"><img src="images/co.png" style="width: 170px; margin-left: 80%;"/></a>';
				} ?>
			</div>			
		</div>
	</div>


