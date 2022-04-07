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

    <title>VayaCar Login</title>
</head>

<body>

    <div id="login-main">
        <form action="<?php echo constant('APPURL'); ?>login/auth" method="POST">

            <h2>Iniciar sesión</h2>

            <p>
                <label for="email">email</label>
                <input type="text" name="email" id="email" autocomplete="off">
            </p>
            <p>
                <label for="password">password</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </p>
            <p>
                <input type="submit" value="Iniciar sesión" name="login"/>
            </p>

        </form>
    </div>

</body>
</html>