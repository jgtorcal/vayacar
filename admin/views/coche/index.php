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
        COCHES
    </header>


    <main id="main_container">

        <h2>COCHES</h2>
        <p><?php echo $this->mensaje; ?></p>

    </main>

</div>

<?php
require 'views/footer.php';
?>