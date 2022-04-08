<?php
require 'views/header.php';
?>

<h2>Editar usuario</h2>

<form action="<?php echo constant('APPURL'); ?>usuarios/update" method="POST" class="form" id="form_usuario">

    <div class="row-1">
        <div class="form-item">
            <label for="id_usuario">ID</label><br>
            <input type="text" id="id_usuario" name="id_usuario" value="<?php echo $this->usuario->id_usuario; ?>" readonly><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo $this->usuario->nombre; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $this->usuario->email; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="password">Password</label><br>
            <input type="text" id="password" name="password" value="<?php echo $this->usuario->password; ?>"><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="id_rol">Rol</label><br>

            <select id="id_rol" name="id_rol" required>

                <?php
                $selected = $this->usuario->id_rol;

                foreach($this->roles as $row){
                    ?>
                    <option value="<?php echo $row->id_rol; ?>" <?php if($selected == $row->id_rol){echo 'selected';} ?>><?php echo $row->nombre; ?></option>
                    <?php
                }
                ?>

            </select><br>
        </div>
    </div>

    <input type="submit" form="form_usuario" value="Editar usuario" class="btn btn-verde"></input>

</form>

<?php
require 'views/footer.php';
?>