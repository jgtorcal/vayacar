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
        
        <?php echo $this->mensaje; ?>

        <?php echo $this->renderboton; ?>


    </main>

</div>

<?php
require 'views/footer.php';
?>