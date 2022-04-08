<?php
require 'views/header.php';
?>

<h2>Crear usuario</h2>

<form action="<?php echo constant('APPURL'); ?>usuarios/create" method="POST" class="form" id="form">

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="password">Password</label><br>
            <input type="text" id="password" name="password" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_rol">Rol desde clase</label><br>
            <select id="id_rol" name="id_rol" required>
                <?php
                foreach($this->roles as $row){
                    ?>
                    <option value="<?php echo $row->id_rol; ?>"><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>
            </select><br>
        </div>
    </div>

    <input type="submit" form="form" value="Enviar" class="btn btn-verde"></input>

    

</form>

<?php
require 'views/footer.php';
?>