<?php
include 'header.php';
?>

<!-- GRID CONTAINER -->
<div id="grid_container">
    
    <?php
    include 'sidebar.php';
    ?>

    <!-- TOP CONTAINER -->
    <header id="top_container">
        TOP
    </header>


    <main id="main_container">

        <h2>Titulo de la sección</h2>


        <div class="restable">
            <table class="tableback">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jordi Garcia</td>
                        <td>jgtorcal@gmail.com</td>
                        <td>1234</td>
                        <td>SuperAdministrador</td>
                        <td class="actions">
                            <div class="tablebtn edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i>Editar</a></div>
                            <div class="tablebtn del"><a href="#"><i class="fa-solid fa-xmark"></i>Eliminar</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nelson Tapado</td>
                        <td>jgtorcal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i>Editar</a></div>
                            <div class="tablebtn del"><a href="#"><i class="fa-solid fa-xmark"></i>Eliminar</a></div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Salvador Giggs</td>
                        <td>jgtorcal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i>Editar</a></div>
                            <div class="tablebtn del"><a href="#"><i class="fa-solid fa-xmark"></i>Eliminar</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mike Peral</td>
                        <td>miguelperal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn edit"><a href="#"><i class="fa-regular fa-pen-to-square"></i>Editar</a></div>
                            <div class="tablebtn del"><a href="#"><i class="fa-solid fa-xmark"></i>Eliminar</a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        

    </main>

</div>

<?php
include 'footer.php';
?>