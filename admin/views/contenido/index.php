<?php
require 'views/header.php';
?>

<h2>Contenidos estáticos</h2>

<form action="<?php echo constant('APPURL'); ?>contenidos/update" method="POST" class="form" id="form_contenido">

    <div class="row-1">
        <div class="form-item">
            <label for="telefono">Teléfono</label><br>
            <input type="text" id="telefono" name="telefono" value="<?php echo $this->contenidos[0]->telefono; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $this->contenidos[0]->email; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="direccion">Dirección</label><br>
            <textarea id="direccion" name="direccion" rows="4"><?php echo $this->contenidos[0]->direccion; ?></textarea>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="mapa">Mapa</label><br>
            <textarea id="mapa" name="mapa" rows="10"><?php echo html_entity_decode(htmlspecialchars_decode($this->contenidos[0]->mapa)); ?></textarea>

            
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="quienes_somos">Quienes somos</label><br>
            <textarea id="quienes_somos" name="quienes_somos" rows="10"><?php echo html_entity_decode(htmlspecialchars_decode($this->contenidos[0]->quienes_somos)); ?></textarea>
        </div>
    </div>

    <input type="submit" form="form_contenido" value="Editar contenidos" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>