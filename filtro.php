<?php
// Consultas
$db = new Database;

// Extraemos las marcas
$marcas = [];
try{
    $query = $db->connect()->query('SELECT * FROM marcas');

    while($row = $query->fetch()){
        array_push($marcas, $row);
    }
} catch(PDOException $e){
}

// Extraemos los colores
$colores = [];
try{
    $query = $db->connect()->query('SELECT * FROM colores');

    while($row = $query->fetch()){
        array_push($colores, $row);
    }
} catch(PDOException $e){
}

// Extraemos las condiciones
$condiciones = [];
try{
    $query = $db->connect()->query('SELECT * FROM condiciones');

    while($row = $query->fetch()){
        array_push($condiciones, $row);
    }
} catch(PDOException $e){
}

// Extraemos las provincias
$provincias = [];
try{
    $query = $db->connect()->query('SELECT * FROM provincias');

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

            <form id="filtroform" method="POST" action="" >

                <div class="form_item">
                    <div class="title">Marca</div>
                    <select id="marca" name="marca" >
                        <option selected="selected" value="all">Todas</option>
                        <?php
                        foreach ($marcas as $marca){
                            ?>
                            <option value="<?php echo $marca['id_marca']; ?>"><?php echo $marca['nombre']; ?></option>
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
                        foreach ($colores as $color){
                            ?>
                            <option value="<?php echo $color['id_color']; ?>"><?php echo $color['color']; ?></option>
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
                        foreach ($condiciones as $condicion){
                            ?>
                            <option value="<?php echo $condicion['id_condicion']; ?>"><?php echo $condicion['nombre']; ?></option>
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
                        foreach ($provincias as $provincia){
                            ?>
                            <option value="<?php echo $provincia['id_provincia']; ?>"><?php echo $provincia['nombre']; ?></option>
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