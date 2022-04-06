<?php
require 'views/header.php';
?>

<h2>Colores disponibles</h2>

<div class="restable">
    <table class="tableback">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once 'models/colormodel.php';

            foreach($this->colores as $row){

                $color = new ColorController();
                $color = $row; 

                ?>
                <tr id="fila-<?php echo $color->id_color; ?>">
                    <td><?php echo $color->id_color; ?></td>
                    <td><?php echo $color->color; ?></td>
                    <td class="actions">
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'colores/edit/' . $color->id_color; ?>"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'colores/delete/' . $color->id_color; ?>"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                    </td>
                </tr>
                <?php 
            }
            ?>

        </tbody>
    </table>
</div>

<a href="<?php echo constant('APPURL') . 'colores/new/';?>" class="btn btn-verde">Crear nuevo Color</a>

<?php
require 'views/footer.php';
?>