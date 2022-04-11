<?php
require 'views/header.php';
?>

<h2>Crear marca</h2>

<form action="<?php echo constant('APPURL'); ?>marcas/create" method="POST" class="form" id="form_marca"  enctype="multipart/form-data">

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre de la marca</label><br>
            <input type="text" id="nombre" name="nombre" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="logo">URL del logo</label><br>
            <input type="file" id="logo" name="logo" value="" required><br>
        </div>
    </div>

    <input type="submit" form="form_marca" value="Crear nueva marca" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>