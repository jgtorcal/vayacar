<!-- MAIN CONTAINER -->
<main id="main_container">

    <?php
    include 'filtro.php';
    ?>

    <section id="carlist">
        <div class="container">


            <?php

            // print_r($_POST);

            if ( empty($_POST['marca']) || empty($_POST['color']) || empty($_POST['condicion']) || empty($_POST['provincia'])){

                // La consulta viene sin parámetros, mostramos todos los coches por defecto
                $query_montada = "SELECT * FROM coches";

            } else {

                // La consulta viene CON parámetros, montamos con consulta en función de lo que llega por $_POST
                $query_array = [];

                if (!empty($_POST['marca'])){
                    if ($_POST['marca'] != 'all'){
                        $query_array[] = "id_marca = {$_POST["marca"]}";
                    }
                }

                if (!empty($_POST['color'])){
                    if ($_POST['color'] != 'all'){
                        $query_array[] = "id_color = {$_POST["color"]}";
                    }
                }

                if (!empty($_POST['condicion'])){
                    if ($_POST['condicion'] != 'all'){
                        $query_array[] = "id_condicion = {$_POST["condicion"]}";
                    }
                }

                if (!empty($_POST['provincia'])){
                    if ($_POST['provincia'] != 'all'){
                        $query_array[] = "id_provincia = {$_POST["provincia"]}";
                    }
                }

                $query_montada = "SELECT * FROM coches";
                $count = 1;
                $elementos = count($query_array);

                // Este foreach monta la query con los diferentes paráemtros (WHRE, AND) en función de los parámetros
                foreach ( $query_array as $valor ){

                    // echo 'count: ' .$count .'<br>';
                    // echo 'elementos: ' .$elementos .'<br>';
                    
                    if ($count == 1 ){

                        if ( $count == $elementos){
                            $query_montada .= ' WHERE ' . $valor;
                        } else {
                            $query_montada .= ' WHERE ' . $valor . ' AND ';
                        }

                    } else {

                        if ( $count == $elementos){
                            $query_montada .= $valor;
                        } else {
                            $query_montada .= $valor . ' AND ';
                        }
                        
                    }

                    $count++;
                    
                }

            }


            // echo '<pre>';
            // print_r($query_montada);
            // echo '</pre>';

            // Ejecutamos la consulta
            $db = new Database;
            $items = [];

            try{

                $query = $db->connect()->query($query_montada);
                while($row = $query->fetch()){
                    array_push($items, $row);
                }

                // echo '<pre>';
                // print_r($items);
                // echo '</pre>';

            } catch(PDOException $e){

                echo '<pre>';
                print_r($e);
                echo '</pre>';
            }

            

            ?>

            <div id="carlistbox">

            <?php
            if ($items){

                foreach ($items as $item){

                    // Sacar el nombre de la marca
                    $items_marca = [];
                    $query_marca = $db->connect()->query("SELECT nombre FROM marcas WHERE id_marca = {$item['id_marca']}");
                    while($row = $query_marca->fetch()){
                        array_push($items_marca, $row);
                    }
                    ?>
                    <div class="carlist_item">
                        <a href="<?php echo constant('FRONTURL'); ?>coche/<?php echo $item['id_coche'];?>">
                            <div class="carlist_item_img">
                                <img src="<?php echo constant('UPLOADSURL_COCHES'); ?><?php echo $item['foto'] ?>">
                            </div>
                            <div class="carlist_item_box">
                                <div class="carlist_item_box_title"><?php echo $items_marca[0]['nombre'] ;?> <?php echo $item['modelo'];?></div>
                                <div class="carlist_item_box_price"><?php echo $item['precio'];?> €</div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>

            </div>

        </div>
    </section>


    
</main>
<!-- / MAIN CONTAINER -->