<?php
require 'views/header.php';
?>

<h2>Crear Coche</h2>

<form action="<?php echo constant('APPURL'); ?>coches/create" method="POST" class="form" id="form_coche"  enctype="multipart/form-data">


    <div class="row-4">
        <div class="form-item">
            <label for="id_marca">Marca</label><br>
            <select id="id_marca" name="id_marca" required>
                <?php
                foreach($this->marcas as $row){
                    ?>
                    <option value="<?php echo $row->id_marca; ?>"><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_color">Color</label><br>
            <select id="id_color" name="id_color" required>
                <?php
                foreach($this->colores as $row){
                    ?>
                    <option value="<?php echo $row->id_color; ?>"><?php echo $row->color; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_provincia">Provincia</label><br>
            <select id="id_provincia" name="id_provincia" required>
                <?php
                foreach($this->provincias as $row){
                    ?>
                    <option value="<?php echo $row->id_provincia; ?>"><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_condicion">Condición</label><br>
            <select id="id_condicion" name="id_condicion" required>
                <?php
                foreach($this->condiciones as $row){
                    ?>
                    <option value="<?php echo $row->id_condicion; ?>"><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
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

    <div class="row-2">
        <div class="form-item">
            <label for="referencia">Referencia</label><br>
            <input type="number" id="referencia" name="referencia" value="" min="0" max="1000" required><br>
        </div>
        <div class="form-item">
            <label for="puertas">Puertas</label><br>
            <input type="number" id="puertas" name="puertas" value="" min="3" max="5" required><br>
        </div>
    </div>

    <div class="row-2">
        <div class="form-item">
            <label for="ano">Año</label><br>
            <input type="number" id="ano" name="ano" value="" min="1980" max="2022" required><br>
        </div>
        <div class="form-item">
            <label for="number">Precio</label><br>
            <input type="number" id="precio" name="precio" value="" min="0" max="100000" required><br>
        </div>
    </div>
    

    <div class="row-2">
        <div class="form-item">
            <label for="foto">Foto</label><br>
            <input type="file" id="foto" name="foto" value="" required><br>
        </div>
        
        <div class="form-item">
            <label for="visibilidad">Visibilidad</label><br>
            <input type="number" id="visibilidad" name="visibilidad" value="" min="0" max="1" required><br>
        </div>
    </div>

    




    <input type="submit" form="form_coche" value="Crear nuevo coche" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>