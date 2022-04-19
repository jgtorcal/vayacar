<?php
require 'views/header.php';
?>

<h2>Editar marca</h2>

<form action="<?php echo constant('APPURL'); ?>marcas/update" method="POST" class="form" id="form_marca"  enctype="multipart/form-data">

    <div class="row-1">
        <div class="form-item">
            <label for="id_marca">ID</label><br>
            <input type="text" id="id_marca" name="id_marca" value="<?php echo $this->marca->id_marca; ?>" readonly><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre de la marca</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo $this->marca->nombre; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Logo</label><br>
            <img src="<?php echo constant('UPLOADS_URL') . $this->marca->logo; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="logo">Nuevo logo</label><br>
            <input type="file" id="logo" name="logo" value=""><br>
        </div>
    </div>

    <input type="submit" form="form_marca" value="Editar marca" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>