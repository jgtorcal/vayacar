<?php
require 'views/header.php';
?>

<h2>Editar color</h2>

<form action="<?php echo constant('APPURL'); ?>colores/update" method="POST" class="form" id="form_color">

    <div class="row-1">
        <div class="form-item">
            <label for="id_color">ID</label><br>
            <input type="text" id="id_color" name="id_color" value="<?php echo $this->color->id_color; ?>" readonly><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="color">Nombre del color</label><br>
            <input type="text" id="color" name="color" value="<?php echo $this->color->color; ?>"><br>
        </div>
    </div>

    <input type="submit" form="form_color" value="Editar color" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>