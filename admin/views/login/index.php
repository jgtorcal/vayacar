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

            <a href="index.php"><img src="<?php echo PUBLICURL; ?>img/logo.png"></a>

            <h2>Iniciar sesión</h2>

            <?php 
            if(!empty($this->mensaje)){
                ?>
                <div class="login-item mensaje">
                    <?php echo $this->mensaje; ?>
                </div>
                <?php
            }
            ?>
            

            <div class="login-item">
                <label for="email">email</label>
                <input type="text" name="email" id="email" autocomplete="off">
            </div>

            <div class="login-item">
                <label for="password">password</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </div>

            <div class="login-item">
                <input class="btn btn-green" type="submit" value="Iniciar sesión" name="login"/>
            </div>
        </form>

    </div>

</body>
</html>