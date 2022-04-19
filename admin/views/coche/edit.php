<?php
require 'views/header.php';

// echo '<pre>';
// print_r($this->coche);
// echo '</pre>';

?>

<h2>Editar Coche</h2>

<form action="<?php echo constant('APPURL'); ?>coches/update" method="POST" class="form" id="form_coche"  enctype="multipart/form-data">

    <div class="row-4">
        <div class="form-item">
            <label for="id_marca">Marca</label><br>
            <select id="id_marca" name="id_marca" required>
                <?php
                $selected = $this->coche->id_marca;
                foreach($this->marcas as $row){
                    ?>
                    <option value="<?php echo $row->id_marca; ?>" <?php if($selected == $row->id_marca){echo 'selected';} ?>><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_color">Color</label><br>
            <select id="id_color" name="id_color" required>
                <?php
                $selected = $this->coche->id_color;
                foreach($this->colores as $row){
                    ?>
                    <option value="<?php echo $row->id_color; ?>" <?php if($selected == $row->id_color){echo 'selected';} ?>><?php echo $row->color; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_provincia">Provincia</label><br>
            <select id="id_provincia" name="id_provincia" required>
                <?php
                $selected = $this->coche->id_provincia;
                foreach($this->provincias as $row){
                    ?>
                    <option value="<?php echo $row->id_provincia; ?>" <?php if($selected == $row->id_provincia){echo 'selected';} ?>><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>

        <div class="form-item">
            <label for="id_condicion">Condición</label><br>
            <select id="id_condicion" name="id_condicion" required>
                <?php
                $selected = $this->coche->id_condicion;
                foreach($this->condiciones as $row){
                    ?>
                    <option value="<?php echo $row->id_condicion; ?>" <?php if($selected == $row->id_condicion){echo 'selected';} ?>><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="modelo">Modelo</label><br>
            <input type="text" id="modelo" name="modelo" value="<?php echo $this->coche->modelo; ?>" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="descripcion">Descripción</label><br>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo $this->coche->descripcion; ?>" required><br>
        </div>
    </div>

    <div class="row-2">
        <div class="form-item">
            <label for="referencia">Referencia</label><br>
            <input type="number" id="referencia" name="referencia" value="<?php echo $this->coche->referencia; ?>" min="0" max="1000" required><br>
        </div>
        <div class="form-item">
            <label for="puertas">Puertas</label><br>
            <input type="number" id="puertas" name="puertas" value="<?php echo $this->coche->puertas; ?>" min="3" max="5" required><br>
        </div>
    </div>

    <div class="row-2">
        <div class="form-item">
            <label for="ano">Año</label><br>
            <input type="number" id="ano" name="ano" value="<?php echo $this->coche->ano; ?>" min="1980" max="2022" required><br>
        </div>
        <div class="form-item">
            <label for="number">Precio</label><br>
            <input type="number" id="precio" name="precio" value="<?php echo $this->coche->precio; ?>" min="0" max="100000" required><br>
        </div>
    </div>

    <div class="row-2">

        <div class="form-item">
            <label for="nombre">Foto actual</label><br>
            <img src="<?php echo constant('PUBLIC_UPLOADS_COCHES_URL') . $this->coche->foto; ?>"><br>
        </div><br>

        <div class="form-item">
            <label for="foto">Foto</label><br>
            <input type="file" id="foto" name="foto" value="<?php echo $this->coche->foto; ?>"><br>
        </div>
        
        <div class="form-item">
            <label for="visibilidad">Visibilidad</label><br>

            <select id="visibilidad" name="visibilidad" required>
                <?php
                $selected = $this->coche->visibilidad;
                ?>
                <option value="0" <?php if($selected == 0){echo 'selected';} ?>>NO</option>
                <option value="1" <?php if($selected == 1){echo 'selected';} ?>>SÍ</option>
            </select><br>

        </div>
    </div>

    <input type="hidden" id="id_coche" name="id_coche" value="<?php echo $this->coche->id_coche; ?>" min="0" max="1"><br>

    <input type="submit" form="form_coche" value="Modificar coche" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>