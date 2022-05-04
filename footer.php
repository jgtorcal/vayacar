		<footer id="footer_container">
			<div class="container">

				<div id="footerbox">
					<div class="footer_center">
						<h3>Importante</h3>
						<p>Esta página Web y VayaCar forman parte del Proyecto Final del Cilo Formativo como Técnico Superior en Desarrollo de Aplicaciones Web de Jordi Garcia.</p>
						<p>Las fotografías de los vehículos perenecen a clicars.com</p>
					</div>

					<div class="footer_right">
						<ul id="menufooter">
							<li><a <?php if($active == "main"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>">Inicio</a></li>
							<li><a <?php if($active == "coches" || $active == "coche"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>coches">Coches</a></li>
							<li><a <?php if($active == "quienes"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>quienes-somos">Quien somos</a></li>
							<li><a <?php if($active == "contacto"){ echo 'class="active"'; } ?> href="<?php echo constant('FRONTURL'); ?>contacto">Contacto</a></li>
						</ul>
					</div>
					
					<div class="footer_left">
						<div id="logo_footer_box">
							<img src="<?php echo constant('FRONTURL'); ?>img/logo_negativo.png" alt="Vayacar logo">
							<p><?php echo $content['direccion']; ?><br><a href="mailto:<?php echo $content['email']; ?>"><?php echo $content['email']; ?></a></p>
						</div>
					</div>
				</div>
				
			</div>
		</footer>

	</div>

	<script src="<?php echo constant('FRONTURL'); ?>vendor/splide/dist/js/splide.min.js"></script>
	<script src="<?php echo constant('FRONTURL'); ?>js/burger.js"></script>

</body>
</html>