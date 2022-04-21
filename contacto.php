<!-- MAIN CONTAINER -->
<main id="main_container">

    <section id="contacto_box">

        <div id="contacto_header">
        </div>

        <div class="container">

            <div id="contacto_content">

                <h1>Contacta con nosotros</h1>

                <div id="contacto_triobox">

                    <div class="contacto_trio">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h4>WhatsApp</h4>
                        <p>Contacta con nuestros comerciales para una atención más directa y personalizada.</p>
                        <p class="red"><?php echo $content['telefono']; ?></p>
                    </div>

                    <div class="contacto_trio">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>E-mail</h4>
                        <p>Puedes enviarnos un correo electrónico y te atenderemos lo más breve posible.</p>
                        <p class="red"><?php echo $content['email']; ?></p>
                    </div>

                    <div class="contacto_trio">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>¡Ven a vernos!</h4>
                        <p>Visita nuestro concesionaro en Gavà (Barcelona)</p>
                        <p class="red"><?php echo $content['direccion']; ?></p>
                    </div>
                </div>

            </div>

        
        </div>

        <div id="contacto_map">
                <?php echo html_entity_decode(htmlspecialchars_decode($content['mapa'])); ?>
        </div>


    </section>

</main>
<!-- / MAIN CONTAINER -->