<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- RESET -->
	<link rel="stylesheet" href="css/reset.css">
	<!-- BURGER -->
	<link rel="stylesheet" href="css/burger.css">	
	<!-- CUSTOM -->
	<link rel="stylesheet" href="css/style.css">
    <!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/1518e5c220.js" crossorigin="anonymous"></script>

    
    <title>Admin</title>
</head>
<body>



<!-- GRID CONTAINER -->
<div id="grid_container">

    <!-- HEADER CONTAINER -->
    <sidebar id="sidebar_container">

        <!-- LOGO -->
        <div id="logo_box">
            <a href="index.php"><img src="img/logo_negativo.png"></a>
        </div>
        <!-- NAV -->
        <nav id="nav_container">
            <div id="menu_box">
                <ul id="menu">
                    <li><a class="active" href="index.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
                    <li><a href="usuarios.php"><i class="fa-solid fa-user"></i>Usuarios</a></li>
                    <li><a href="coches.php"><i class="fa-solid fa-car"></i>Coches</a></li>
                    <li><a href="marcas.php"><i class="fa-solid fa-tag"></i>Marcas</a></li>
                    <li><a href="colores.php"><i class="fa-solid fa-brush"></i>Colores</a></li>
                    <li><a href="contenidos.php"><i class="fa-solid fa-file-lines"></i>Contenidos</a></li>
                    <li><a href="contactos.php"><i class="fa-solid fa-id-card"></i>Contactos</a></li>
                </ul>
                <div id="menu_btn">
                    <div id="burger"></div>
                </div>
            </div>
        </nav>
    </sidebar>


    <!-- TOP CONTAINER -->
    <header id="top_container">
        TOP
    </header>


    <main id="main_container">
        MAIN LAP DESK
    </main>

</div>

<script src="js/burger.js"></script>


    
</body>
</html>