<?php
require 'views/header.php';
?>

<h2>Editar contacto</h2>

<form action="<?php echo constant('APPURL'); ?>contactos/update" method="POST" class="form" id="form_contacto">

    <div class="row-1">
        <div class="form-item">
            <label for="id_contacto">ID</label><br>
            <input type="text" id="id_contacto" name="id_contacto" value="<?php echo $this->contacto->id_contacto; ?>" readonly><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo $this->contacto->nombre; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="telefono">Teléfono</label><br>
            <input type="text" id="telefono" name="telefono" value="<?php echo $this->contacto->telefono; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $this->contacto->email; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="mensaje">Mensaje</label><br>
            <textarea id="mensaje" name="mensaje" rows="10"><?php echo $this->contacto->mensaje; ?></textarea>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_estado">Estado</label><br>
            <input type="text" id="id_estado" name="id_estado" value="<?php echo $this->contacto->id_estado; ?>"><br>
        </div>
    </div>

    <input type="submit" form="form_contacto" value="Editar contacto" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>