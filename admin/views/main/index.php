<?php
require 'views/header.php';
?>

<h2>Panel de Inicio</h2>



<div id="resumen-box">

    <div id="logo_box">
        <a href="<?php echo APPURL; ?>main"><img src="<?php echo PUBLICURL; ?>img/logo.png"></a>
    </div>

    <div id="resumen">

        <div class="item">
            <div class="item-ico"><i class="fa-solid fa-users"></i></div>
            <div class="item-number"><?php echo $this->num_usuarios; ?></div>
            <div class="item-text">Usuarios</div>
        </div>

        <div class="item">
            <div class="item-ico"><i class="fa-solid fa-car"></i></div>
            <div class="item-number"><?php echo $this->num_coches; ?></div>
            <div class="item-text">Coches</div>
        </div>

        <div class="item">
            <div class="item-ico"><i class="fa-solid fa-tags"></i></div>
            <div class="item-number"><?php echo $this->num_marcas; ?></div>
            <div class="item-text">Marcas</div>
        </div>

        <div class="item">
            <div class="item-ico"><i class="fa-solid fa-id-card"></i></div>
            <div class="item-number"><?php echo $this->num_contactos; ?></div>
            <div class="item-text">Contactos</div>
        </div>

    </div>
</div>



<?php
require 'views/footer.php';
?>