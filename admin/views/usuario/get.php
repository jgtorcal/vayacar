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
        USUARIOS INDEX
    </header>


    <main id="main_container">

        <h2>Usuarios</h2>
        <p><?php if (isset($this->mensaje)){ echo $this->mensaje; } ?></p>

    </main>

</div>

<?php
require 'views/footer.php';
?>