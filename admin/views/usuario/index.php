<?php
require 'views/header.php';
?>

<h2>Usuarios</h2>

<div class="restable">
    <table class="tableback">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
                <th>Rol</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once 'models/usuariomodel.php';

            foreach($this->usuarios as $row){

                $usuario = new UsuarioController();
                $usuario = $row; 

                ?>
                <tr id="fila-<?php echo $usuario->id_usuario; ?>">
                    <td><?php echo $usuario->id_usuario; ?></td>
                    <td><?php echo $usuario->nombre; ?></td>
                    <td><?php echo $usuario->email; ?></td>
                    <td><?php echo $usuario->password; ?></td>
                    <td><?php echo $usuario->id_rol; ?></td>
                    <td class="actions">
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'usuarios/edit/' . $usuario->id_usuario; ?>"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'usuarios/delete/' . $usuario->id_usuario; ?>"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                    </td>
                </tr>
                <?php 
            }
            ?>

        </tbody>
    </table>
</div>

<a href="<?php echo constant('APPURL') . 'usuarios/new/';?>" class="btn btn-verde">Crear nuevo Usuario</a>

<?php
require 'views/footer.php';
?>