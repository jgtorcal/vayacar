<?php
require 'views/header.php';
?>

<h2>Coches disponibles</h2>

<div class="restable">
    <table class="tableback">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ref.</th>
                <th>Modelo</th>
                <th>Descrip.</th>
                <th>Puertas</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Visible</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Provincia</th>
                <th>Condición</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($this->coches as $row){

                $coche = $row; 

                ?>
                <tr id="fila-<?php echo $coche->id_coche; ?>">

                    <td><?php echo $coche->id_coche; ?></td>
                    <td><?php echo $coche->referencia; ?></td>
                    <td><?php echo $coche->modelo; ?></td>
                    <td><?php echo $coche->descripcion; ?></td>
                    <td><?php echo $coche->puertas; ?></td>
                    <td><?php echo $coche->ano; ?></td>
                    <td><?php echo $coche->precio; ?></td>
                    <td><img src="<?php echo constant('UPLOADSURL_PUBLIC_COCHES') . $coche->foto; ?>" width="50px"></td>
                    <td><?php echo $coche->visibilidad; ?></td>
                    <td><?php echo $coche->id_marca; ?></td>
                    <td><?php echo $coche->id_color; ?></td>
                    <td><?php echo $coche->id_provincia; ?></td>
                    <td><?php echo $coche->id_condicion; ?></td>

                    <td class="actions">
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'coches/edit/' . $coche->id_coche; ?>"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                        <div class="tablebtn"><a href="<?php echo constant('APPURL') . 'coches/delete/' . $coche->id_coche; ?>"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                    </td>
                </tr>
                <?php 
            }
            ?>

        </tbody>
    </table>
</div>

<a href="<?php echo constant('APPURL') . 'coches/new/';?>" class="btn btn-verde">Crear nuevo coche</a>

<?php
require 'views/footer.php';
?>