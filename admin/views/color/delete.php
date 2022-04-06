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

        <h2>Eliminar color</h2>

        <?php echo $this->mensaje; ?>

        <a href="<?php echo APPURL; ?>colores">Volver</a>

        


    </main>

</div>

<?php
require 'views/footer.php';
?>