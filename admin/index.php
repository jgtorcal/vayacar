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
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-plus btn-add"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nelson Tapado</td>
                        <td>jgtorcal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-plus btn-add"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Salvador Giggs</td>
                        <td>jgtorcal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-plus btn-add"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mike Peral</td>
                        <td>miguelperal@gmail.com</td>
                        <td>1234</td>
                        <td>Administrador</td>
                        <td class="actions">
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-plus btn-add"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-pen btn-edit"></i></a></div>
                            <div class="tablebtn"><a href="#"><i class="fa-solid fa-square-xmark btn-del"></i></a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>



        <h2>Formulario</h2>
        

        <form action="#" method="POST" class="form" id="form">

            <div class="row-4">
                <div class="form-item">
                    <label for="marca">Marca</label><br>
                    <select name="marca" id="marca">
                        <option value="1" selected>Ford</option>
                        <option value="2">Seat</option>
                        <option value="3">BMW</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="color">Color</label><br>
                    <select name="color" id="color">
                        <option value="1" selected>Blanco</option>
                        <option value="2">Azul</option>
                        <option value="3">Rojo</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="condicion">Condición</label><br>
                    <select name="condicion" id="condicion">
                        <option value="1" selected>Seminuevo</option>
                        <option value="2">Buen estado</option>
                        <option value="3">Por reparar</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="provincia">Provincia</label><br>
                    <select name="provincia" id="provincia">
                        <option value="1" selected>Baleares</option>
                        <option value="2">Catalunya</option>
                        <option value="3">Valencia</option>
                    </select>
                </div>
            </div>


            <div class="row-1">
                <div class="form-item">
                    <label for="modelo">Modelo</label><br>
                    <input type="text" id="modelo" name="modelo"><br>
                </div>
            </div>


            <div class="row-2">
                <div class="form-item">
                    <label for="puertas">Puertas</label><br>
                    <input type="number" id="puertas" name="puertas"><br>
                </div>

                <div class="form-item">
                    <label for="ref">Ref</label><br>
                    <input type="number" id="ref" name="ref"><br>
                </div>
            </div>


            <div class="row-2">
                <div class="form-item">
                    <label for="precio">Precio</label><br>
                    <input type="number" id="precio" name="precio"><br>
                </div>

                <div class="form-item">
                    <label for="ano">Año</label><br>
                    <input type="number" id="ano" name="ano"><br>
                </div>
            </div>

            <input type="submit" form="form" value="Enviar" class="btn btn-verde"></input>
                

        </form>

        

    </main>

</div>

<?php
include 'footer.php';
?>