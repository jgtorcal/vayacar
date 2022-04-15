<?php
require 'views/header.php';
?>

<h2>Crear marca</h2>

<form action="<?php echo constant('APPURL'); ?>coches/create" method="POST" class="form" id="form_coche"  enctype="multipart/form-data">

    <div class="row-1">
        <div class="form-item">
            <label for="referencia">Referencia</label><br>
            <input type="text" id="referencia" name="referencia" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="modelo">Modelo</label><br>
            <input type="text" id="modelo" name="modelo" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="descripcion">Descripción</label><br>
            <input type="text" id="descripcion" name="descripcion" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="puertas">Puertas</label><br>
            <input type="text" id="puertas" name="puertas" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="ano">Año</label><br>
            <input type="text" id="ano" name="ano" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="precio">Precio</label><br>
            <input type="text" id="precio" name="precio" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="foto">Foto</label><br>
            <input type="file" id="foto" name="foto" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="visibilidad">Visibilidad</label><br>
            <input type="text" id="visibilidad" name="visibilidad" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_marca">Marca</label><br>
            <input type="text" id="id_marca" name="id_marca" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_color">Color</label><br>
            <input type="text" id="id_color" name="id_color" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_provincia">Provincia</label><br>
            <input type="text" id="id_provincia" name="id_provincia" value="" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_condicion">Condición</label><br>
            <input type="text" id="id_condicion" name="id_condicion" value="" required><br>
        </div>
    </div>



    <input type="submit" form="form_coche" value="Crear nuevo coche" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>