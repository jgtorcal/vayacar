<?php
require 'views/header.php';
?>

<!-- GRID CONTAINER -->
<div id="grid_container">
    
    <?php
    require 'views/sidebar.php';
    ?>

    <!-- TOP CONTAINER -->
    <header id="top_container">
        GESTIÓN DE COLORES
    </header>


    <main id="main_container">

        <h2>Crear color</h2>

        <form action="<?php echo constant('APPURL'); ?>colores/create" method="POST" class="form" id="form_color">

            <div class="row-1">
                <div class="form-item">
                    <label for="color">Nombre del color</label><br>
                    <input type="text" id="color" name="color" value=""><br>
                </div>
            </div>

            <input type="submit" form="form_color" value="Crear nuevo color" class="btn btn-verde"></input>

        </form>


    </main>

</div>

<?php
require 'views/footer.php';
?>