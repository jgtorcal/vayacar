<!-- MAIN CONTAINER -->
<main id="main_container">

    <section id="car">
        <div class="container">

            <div id="carbox">

                <div id="carimg">

                    <img src="<?php echo $front_url; ?>/img/test/02.jpg">

                    

                    <div id="cardetails">

                        <div id="cartitle"><h1>Mazda MX3</h1></div>

                        <div id="cardestacado">
                            <div class="cardesitem">KM-0</div>
                            <div class="cardesitem precio">12.000 €</div>
                        </div>

                        <div id="cardesc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, natus totam! Temporibus, aut voluptatem animi nostrum quo iusto quaerat blanditiis iste maiores quis veniam modi natus obcaecati voluptatum debitis laudantium!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, natus totam! Temporibus, aut voluptatem animi nostrum quo iusto quaerat blanditiis iste maiores quis veniam modi natus obcaecati voluptatum debitis laudantium!</p>
                        </div>

                        <div id="cardetailsbox">
                            <div class="detail"><b>Marca</b>: Mazda </div>
                            <div class="detail"><b>Modelo</b>: MX7</div>
                            <div class="detail"><b>Puertas</b>: 3</div>
                            <div class="detail"><b>Color</b>: Blanco</div>
                            <div class="detail"><b>Año de matriculación</b>: 2007</div>
                            <div class="detail"><b>Provincia</b>: Barcelona</div>
                        </div>

                        

                    </div>

                </div>

                <div id="cartext">

                    

                    <div id="carformbox">

                        <div id="carformcta">
                            <i class="fa-solid fa-rocket"></i>¿Te gusta? ¡Contacta con nosotros!
                        </div>

                        <form id="carform" action="#" method="POST">

                            <div class="row-2">
                                <div class="form-item">
                                    <label for="nombre">Nombre</label><br>
                                    <input type="text" id="nombre" name="nombre"><br>
                                </div>

                                <div class="form-item">
                                    <label for="telefono">Teléfono</label><br>
                                    <input type="text" id="telefono" name="telefono"><br>
                                </div>
                            </div>

                            

                            <div class="form-item">
                                <label for="email">Email</label><br>
                                <input type="text" id="email" name="email"><br>
                            </div>

                            <div class="form-item">
                                <label for="mensaje">Mensaje</label><br>
                                <textarea id="mensaje" name="mensaje" rows="4"></textarea>
                            </div>

                            <input type="submit" form="form" value="Enviar" class="btn btn-verde"></input>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
</main>
<!-- / MAIN CONTAINER -->