<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="robots" content="noindex,nofollow">
	<!-- SPLIDE -->
	<link rel="stylesheet" href="<?php echo constant('FRONTURL'); ?>vendor/splide/dist/css/splide.min.css">
	<!-- RESET -->
	<link rel="stylesheet" href="<?php echo constant('FRONTURL'); ?>css/reset.css">
	<!-- BURGER -->
	<link rel="stylesheet" href="<?php echo constant('FRONTURL'); ?>/css/burger.css">	
	<!-- CUSTOM -->
	<link rel="stylesheet" href="<?php echo constant('FRONTURL'); ?>/css/style.css">
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/1518e5c220.js" crossorigin="anonymous"></script>

	<title>VayaCar - Vehículos de ocasión</title>
</head>

<body>
	<!-- GRID CONTAINER -->
	<div id="grid_container">
		

		<!-- HEADER CONTAINER -->
		<header id="header_container">

			<div class="container">

				<div id="header_container_box">
					<!-- LOGO -->
					<div id="logo_box">
						<a href="<?php echo constant('FRONTURL'); ?>"><img src="<?php echo constant('FRONTURL'); ?>img/logo.png"></a>
					</div>
					<!-- NAV -->
					<nav id="nav_container">
						<div id="menu_box">
							<ul id="menu">
								<li><a <?php if($active == "main"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>">Inicio</a></li>
								<li><a <?php if($active == "coches" || $active == "coche"){ echo 'class="active"'; } ?>href="<?php echo constant('FRONTURL'); ?>coches">Coches</a></li>
								<li><a <?php if($active == "quienes"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>quienes-somos">Quien somos</a></li>
								<li><a <?php if($active == "contacto"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>contacto">Contacto</a></li>
							</ul>
							<div id="menu_btn">
								<div id="burger"></div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>