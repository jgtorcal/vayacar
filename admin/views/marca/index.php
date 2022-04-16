<?php
require 'views/header.php';
?>

<h2>Marcas disponibles</h2>

<div class="restable">
    <table class="tableback">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Logo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once 'models/marcamodel.php';

            foreach($this->marcas as $row){

                $marca = new MarcaController();
                $marca = $row; 

                ?>
                <tr id="fila-<?php echo $marca->id_marca; ?>">
                    <td><?php echo $marca->id_marca; ?></td>
                    <td><?php echo $marca->nombre; ?></td>
                    <td><img src="<?php echo constant('UPLOADSURL_PUBLIC') . $marca->logo; ?>" width="50px"></td>
                    <td class="actions">
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'marcas/edit/' . $marca->id_marca; ?>"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'marcas/delete/' . $marca->id_marca; ?>" onclick="return confirm('¿Estás seguro de querer eliminar esta marca?');"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                    </td>
                </tr>
                <?php 
            }
            ?>

        </tbody>
    </table>
</div>

<a href="<?php echo constant('APPURL') . 'marcas/new/';?>" class="btn btn-verde">Crear nueva marca</a>

<?php
require 'views/footer.php';
?>