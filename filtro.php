<?php
// Consultas
$db = new Database;

// Extraemos las marcas utilizadas
$marcas = [];
try{
    $query = $db->connect()->query('SELECT DISTINCT marcas.id_marca, marcas.nombre FROM marcas INNER JOIN coches ON marcas.id_marca = coches.id_marca WHERE coches.visibilidad=1');

    while($row = $query->fetch()){
        array_push($marcas, $row);
    }
} catch(PDOException $e){
}

// Extraemos los colores utilizados
$colores = [];
try{
    $query = $db->connect()->query('SELECT DISTINCT colores.id_color, colores.color FROM colores INNER JOIN coches ON colores.id_color = coches.id_color WHERE coches.visibilidad=1');

    while($row = $query->fetch()){
        array_push($colores, $row);
    }
} catch(PDOException $e){
}

// Extraemos las condiciones utilizadas
$condiciones = [];
try{
    $query = $db->connect()->query('SELECT DISTINCT condiciones.id_condicion, condiciones.nombre FROM condiciones INNER JOIN coches ON condiciones.id_condicion = coches.id_condicion WHERE coches.visibilidad=1');

    while($row = $query->fetch()){
        array_push($condiciones, $row);
    }
} catch(PDOException $e){
}

// Extraemos las provincias utilizadas
$provincias = [];
try{
    $query = $db->connect()->query('SELECT DISTINCT provincias.id_provincia, provincias.nombre FROM provincias INNER JOIN coches ON provincias.id_provincia = coches.id_provincia WHERE coches.visibilidad=1');

    while($row = $query->fetch()){
        array_push($provincias, $row);
    }
} catch(PDOException $e){
}


?>


<section class="filtrobox">

    <div class="titulobox">
        <div class="container">
            <h3 id="filtrobtn"><i class="fa-solid fa-magnifying-glass"></i>Encuentra tu coche ideal</h3>
        </div>
    </div>

    <div id="filtro">
        <div class="container">

            <form id="filtroform" method="POST" action="<?php echo constant('FRONTURL'); ?>coches" >

                <div class="form_item">
                    <div class="title">Marca</div>
                    <select id="marca" name="marca" >
                        <option selected="selected" value="all">Todas</option>
                        <?php
                        if (!empty($_POST['marca'])){
                            $selected = $_POST['marca'];
                        } else {

                            $selected = null;

                            if ( $url[1] == 'marca' ) {

                                $selected = $url[2];
                            
                            }

                        }
                        foreach ($marcas as $marca){
                            ?>
                            <option value="<?php echo $marca['id_marca']; ?>" <?php if($selected == $marca['id_marca']){echo 'selected';} ?>><?php echo $marca['nombre']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Color</div>
                    <select id="color" name="color" >
                        <option selected="selected" value="all">Todos</option>
                        <?php
                        if (!empty($_POST['color'])){
                            $selected = $_POST['color'];
                        } else {
                            $selected = null;
                        }
                        foreach ($colores as $color){
                            ?>
                            <option value="<?php echo $color['id_color']; ?>" <?php if($selected == $color['id_color']){echo 'selected';} ?>><?php echo $color['color']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Condición</div>
                    <select id="condicion" name="condicion" >
                        <option selected="selected" value="all">Todas</option>
                        <?php
                        if (!empty($_POST['condicion'])){
                            $selected = $_POST['condicion'];
                        } else {
                            $selected = null;
                        }
                        foreach ($condiciones as $condicion){
                            ?>
                            <option value="<?php echo $condicion['id_condicion']; ?>" <?php if($selected == $condicion['id_condicion']){echo 'selected';} ?>><?php echo $condicion['nombre']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Provincia</div>
                    <select id="provincia" name="provincia" >
                        <option selected="selected" value="all">Todas</option>
                        <?php
                        if (!empty($_POST['provincia'])){
                            $selected = $_POST['provincia'];
                        } else {
                            $selected = null;
                        }
                        foreach ($provincias as $provincia){
                            ?>
                            <option value="<?php echo $provincia['id_provincia']; ?>" <?php if($selected == $provincia['id_provincia']){echo 'selected';} ?>><?php echo $provincia['nombre']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form_item">
                    <button type="submit" id="enviar" name="enviar" ><i class="fa-solid fa-magnifying-glass"></i> Filtrar</button>
                </div>

            </form>

        </div>
    </div>


    <script>

    const targetDiv = document.getElementById("filtro");
    const btn = document.getElementById("filtrobtn");

    btn.onclick = function () {
        if (window.getComputedStyle(targetDiv).display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };

    </script>

</section>