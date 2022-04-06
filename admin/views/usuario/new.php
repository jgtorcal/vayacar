<?php
require 'views/header.php';
?>

<form action="<?php echo constant('APPURL'); ?>usuarios/insert" method="POST" class="form" id="form">

    <div class="row-1">
        <div class="form-item">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" required><br>
        </div>
    </div>

    <div class="row-1">
        <div class="form-item">
            <label for="password">Password</label><br>
            <input type="text" id="password" name="password" required><br>
        </div>
    </div>

    <input type="submit" form="form" value="Enviar" class="btn btn-verde"></input>
    

</form>

<?php
require 'views/footer.php';
?>