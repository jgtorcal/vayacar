<?php
require 'views/header.php';
?>

<h2>Contactos</h2>

<div class="restable">
    <table class="tableback">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Coche</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once 'models/contactomodel.php';

            foreach($this->contactos as $row){

                $contacto = $row; 

                ?>
                <tr id="fila-<?php echo $contacto->id_contacto; ?>">
                    <td><?php echo $contacto->id_contacto; ?></td>
                    <td><?php echo $contacto->nombre; ?></td>
                    <td><?php echo $contacto->telefono; ?></td>
                    <td><?php echo $contacto->email; ?></td>
                    <td class="conlink"><span style="background-color: <?php echo $contacto->estado_color; ?>"><?php echo $contacto->estado_name; ?></span></td>
                    <td class="conlink"><a href="<?php echo constant('APPURL') . 'coches/edit/' . $contacto->id_coche; ?>"><?php echo $contacto->marca_name; ?> <?php echo $contacto->modelo; ?></a></td>
                    <td class="actions">
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'contactos/edit/' . $contacto->id_contacto; ?>"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'contactos/delete/' . $contacto->id_contacto; ?>" onclick="return confirm('¿Seguro que quieres eliminar este contacto?');"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                    </td>
                </tr>
                <?php 
            }
            ?>

        </tbody>
    </table>
</div>

<?php
require 'views/footer.php';
?>