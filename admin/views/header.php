<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- RESET -->
	<link rel="stylesheet" href="<?php echo constant('PUBLICURL'); ?>css/reset.css">
	<!-- BURGER -->
	<link rel="stylesheet" href="<?php echo constant('PUBLICURL'); ?>css/burger.css">	
	<!-- CUSTOM -->
	<link rel="stylesheet" href="<?php echo constant('PUBLICURL'); ?>css/style.css">
    <!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/1518e5c220.js" crossorigin="anonymous"></script>

    <title>VayaCar Admin</title>
</head>
<body>
<!-- GRID CONTAINER -->
<div id="grid_container">
    
    <?php
    require 'views/sidebar.php';
    ?>
    
    <!-- TOP CONTAINER -->
    <header id="top_container">
        <?php echo $this->titulo_seccion; ?>
    </header>


    <main id="main_container">