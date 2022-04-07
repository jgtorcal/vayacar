<!-- HEADER CONTAINER -->
<sidebar id="sidebar_container">

    <!-- LOGO -->
    <div id="logo_box">
        <a href="<?php echo APPURL; ?>main"><img src="<?php echo PUBLICURL; ?>img/logo_negativo.png"></a>
    </div>

    <!-- NAV -->
    <nav id="nav_container">
        <div id="menu_box">
            <ul id="menu">
            <?php

            //$controller->checkAuthMenu($controller_name, $login, $su);
            
            // Marcamos el item del menñu activo
            $contr = $this->controller_name;

            function isActive($controlador, $actual){
                if ($controlador == $actual) {
                    echo 'class="active"';
                } else {
                    echo 'class=""';
                }
            }

            // Montamos el menu en función del rol del usuario logeado
            $rol = $this->rol;
            
            if ($rol == 1){
                $rol_name = 'Admin';
                ?>
                <li><a href="<?php echo APPURL; ?>main" <?php isActive($contr, 'main'); ?>><i class="fa-solid fa-house"></i>Inicio</a></li>
                <li><a href="<?php echo APPURL; ?>coches"<?php isActive($contr, 'coche'); ?>><i class="fa-solid fa-car"></i>Coches</a></li>
                <li><a href="<?php echo APPURL; ?>contactos"<?php isActive($contr, 'contacto'); ?>><i class="fa-solid fa-id-card"></i>Contactos</a></li>
                <?php
            } elseif ($rol == 2){
                $rol_name = 'SuperAdmin';
                ?>
                <li><a href="<?php echo APPURL; ?>main" <?php isActive($contr, 'main'); ?>><i class="fa-solid fa-house"></i>Inicio</a></li>
                <li><a href="<?php echo APPURL; ?>usuarios"<?php isActive($contr, 'usuario'); ?>><i class="fa-solid fa-user"></i>Usuarios</a></li>
                <li><a href="<?php echo APPURL; ?>coches"<?php isActive($contr, 'coche'); ?>><i class="fa-solid fa-car"></i>Coches</a></li>
                <li><a href="<?php echo APPURL; ?>marcas"<?php isActive($contr, 'marca'); ?>><i class="fa-solid fa-tag"></i>Marcas</a></li>
                <li><a href="<?php echo APPURL; ?>colores"<?php isActive($contr, 'color'); ?>><i class="fa-solid fa-brush"></i>Colores</a></li>
                <li><a href="<?php echo APPURL; ?>contenidos"<?php isActive($contr, 'contenido'); ?>><i class="fa-solid fa-file-lines"></i>Contenidos</a></li>
                <li><a href="<?php echo APPURL; ?>contactos"<?php isActive($contr, 'contacto'); ?>><i class="fa-solid fa-id-card"></i>Contactos</a></li>
                <?php
            }

            ?>

                <li>
                    <div class="sesionname"><?php echo $this->nombre; ?> (<?php echo $rol_name;?> )</div>
                    <a href="<?php echo APPURL; ?>login/cerrar"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesión</a>
                </li>
                


            </ul>

            <p></p>

            <div id="menu_btn">
                <div id="burger"></div>
            </div>
        </div>
    </nav>

</sidebar>