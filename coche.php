<!-- MAIN CONTAINER -->
<main id="main_container">

    <section id="car">
        <div class="container">

        <?php

        // Sacamos los datos del coche
        $db = new Database;
        $coche = [];
        try{
            $query = $db->connect()->query("SELECT * FROM coches WHERE id_coche = {$id_coche}");
            while($row = $query->fetch()){
                array_push($coche, $row);
            }
        } catch(PDOException $e){
        }

        // SI ha coch
        if ( empty($coche[0])){
            echo 'Vehículo no disponible';
        } else {

            // Sacamos el nombre de la marca
            $items_marca = [];
            $query_marca = $db->connect()->query("SELECT nombre FROM marcas WHERE id_marca = {$coche[0]['id_marca']}");
            while($row = $query_marca->fetch()){
                array_push($items_marca, $row);
            }

            // Sacamos el nombre del color
            $items_color = [];
            $query_color = $db->connect()->query("SELECT color FROM colores WHERE id_color = {$coche[0]['id_color']}");
            while($row = $query_color->fetch()){
                array_push($items_color, $row);
            }

            // Sacamos el nombre de la provincia
            $items_provincia = [];
            $query_provincia = $db->connect()->query("SELECT nombre FROM provincias WHERE id_provincia = {$coche[0]['id_provincia']}");
            while($row = $query_provincia->fetch()){
                array_push($items_provincia, $row);
            }

            // Sacamos el nombre de la condición
            $items_condicion = [];
            $query_condicion = $db->connect()->query("SELECT nombre FROM condiciones WHERE id_condicion = {$coche[0]['id_condicion']}");
            while($row = $query_condicion->fetch()){
                array_push($items_condicion, $row);
            }

            ?>


            <div id="carbox">

                <div id="carimg">

                    <img src="<?php echo $fotocochesurl; ?><?php echo $coche[0]['foto'] ?>">

                    <div id="cardetails">

                        <div id="cartitle"><h1><?php echo $items_marca[0]['nombre'] ;?> <?php echo $coche[0]['modelo']; ?></h1></div>

                        <div id="cardestacado">
                            <div class="cardesitem"><?php echo $items_condicion[0]['nombre'] ;?></div>
                            <div class="cardesitem precio"><?php echo $coche[0]['precio']; ?> €</div>
                        </div>

                        <div id="cardesc">
                            <p><?php echo $coche[0]['descripcion']; ?></p>
                        </div>

                        <div id="cardetailsbox">
                            <div class="detail"><b>Marca</b>: <?php echo $items_marca[0]['nombre'] ;?> </div>
                            <div class="detail"><b>Modelo</b>: <?php echo $coche[0]['modelo']; ?></div>
                            <div class="detail"><b>Puertas</b>: <?php echo $coche[0]['puertas']; ?></div>
                            <div class="detail"><b>Color</b>: <?php echo $items_color[0]['color'] ;?></div>
                            <div class="detail"><b>Año de matriculación</b>: <?php echo $coche[0]['ano']; ?></div>
                            <div class="detail"><b>Provincia</b>: <?php echo $items_provincia[0]['nombre'] ;?></div>
                        </div>

                    </div>

                </div>

                <div id="cartext">

                    <div id="carformbox">

                        <div id="carformcta">
                            <i class="fa-solid fa-rocket"></i>¿Te gusta? ¡Contacta con nosotros!
                        </div>

                        <form id="carform" onsubmit="return ajaxpost()">

                            <div class="row-2">
                                <div class="form-item">
                                    <label for="nombre">Nombre</label><br>
                                    <input type="text" id="nombre" name="nombre" required><br>
                                </div>

                                <div class="form-item">
                                    <label for="telefono">Teléfono</label><br>
                                    <input type="text" id="telefono" name="telefono" required><br>
                                </div>
                            </div>

                            <div class="form-item">
                                <label for="email">Email</label><br>
                                <input type="text" id="email" name="email" required><br>
                            </div>

                            <div class="form-item">
                                <label for="mensaje">Mensaje</label><br>
                                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                            </div>

                            <input type="hidden" id="id_coche" name="id_coche" value="<?php echo $coche[0]['id_coche']; ?>"><br>

                            <input type="submit" value="Enviar" class="btn btn-verde"></input>

                        </form>

                        <div id="mensaje_result"></div>

                        <script>
                        function ajaxpost () {

                            var form = document.getElementById("carform");
                            var data = new FormData(form);

                            fetch("../ajaxform.php", { method:"POST", body:data })
                            .then(res => res.text())
                            .then((results) => { 
                                console.log(results); 
                                document.getElementById("mensaje_result").style.display = 'block';
                                document.getElementById("mensaje_result").innerHTML = results;
                                document.getElementById("carform").reset();
                            });
                            return false;
                        }
                        </script>

                    </div>

                </div>

            </div>

            <?php
            
        }
        
        ?>

            

        </div>
    </section>
</main>
<!-- / MAIN CONTAINER -->