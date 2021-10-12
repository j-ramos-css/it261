<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>

<head>
	<title><?=$title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow" />
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/6a71565c22.js"></script>
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/aia.css" />
	<link rel="stylesheet" href="css/portal.css" />
	<link rel="stylesheet" href="css/form.css" />
</head>

<body>
	<!-- START WRAPPER -->
	<main class="wrapper">
		<header>
			<h1 id="header"><a href="index.php"><i class="logo fa <?=$logo?>"></i>Julio Ramos IT162 Portal</a></h1>
			<nav>
				<ul class="topnav" id="myTopnav">
					<?=makeLinks($nav1)?>

					<!-- <li><a href="index.php" class="selected">Welcome</a></li>
					<li><a href="big/index.php">Big</a></li>
					<li><a href="aia.php">AIA</a></li>
					<li><a href="flowchart.php">Flowchart</a></li>
					<li><a href="glowupseattle.com">Final Project</a></li>
					<li><a href="contactme.php">Contact Julio</a></li> -->

					<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>

				</ul>
			</nav>
		</header>
