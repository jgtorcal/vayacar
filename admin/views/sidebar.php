<!-- HEADER CONTAINER -->
<sidebar id="sidebar_container">

    <!-- LOGO -->
    <div id="logo_box">
        <a href="index.php"><img src="<?php echo PUBLICURL; ?>img/logo_negativo.png"></a>
    </div>

    <!-- NAV -->
    <nav id="nav_container">
        <div id="menu_box">
            <ul id="menu">
            <?php
            
            // Marcamos el item del menñu activo
            $contr = $this->controller_name;

            function isActive($controlador, $actual){
                if ($controlador == $actual) {
                    echo 'class="active"';
                } else {
                    echo 'class=""';
                }
            }

            ?>
                <li><a href="<?php echo APPURL; ?>main" <?php isActive($contr, 'main'); ?>><i class="fa-solid fa-house"></i>Inicio</a></li>
                <li><a href="<?php echo APPURL; ?>usuarios"<?php isActive($contr, 'usuario'); ?>><i class="fa-solid fa-user"></i>Usuarios</a></li>
                <li><a href="<?php echo APPURL; ?>coches"<?php isActive($contr, 'coche'); ?>><i class="fa-solid fa-car"></i>Coches</a></li>
                <li><a href="<?php echo APPURL; ?>marcas"<?php isActive($contr, 'marca'); ?>><i class="fa-solid fa-tag"></i>Marcas</a></li>
                <li><a href="<?php echo APPURL; ?>colores"<?php isActive($contr, 'color'); ?>><i class="fa-solid fa-brush"></i>Colores</a></li>
                <li><a href="<?php echo APPURL; ?>contenidos"<?php isActive($contr, 'contenido'); ?>><i class="fa-solid fa-file-lines"></i>Contenidos</a></li>
                <li><a href="<?php echo APPURL; ?>contactos"<?php isActive($contr, 'contacto'); ?>><i class="fa-solid fa-id-card"></i>Contactos</a></li>
            </ul>
            <div id="menu_btn">
                <div id="burger"></div>
            </div>
        </div>
    </nav>

</sidebar>