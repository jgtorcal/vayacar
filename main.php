
<!-- MAIN CONTAINER -->
<main id="main_container">
	
	<section id="slider_main">
		<div id="slider">
			<div id="image_slider" class="splide">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide" style="background: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.4)), url('<?php echo constant('FRONTURL'); ?>img/slide01.png'); background-size: cover;">
							<div class="container">
								<div class="slider_text_box">
									<div class="box">
										<h3>Tenemos tu coche ideal</h3>
										<!-- <span>Es ahora</span> -->
									</div>
								</div>
							</div>
						</li>
						<li class="splide__slide" style="background: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.4)), url('<?php echo constant('FRONTURL'); ?>img/slide04.png'); background-size: cover;">
							<div class="container">
								<div class="slider_text_box">
									<div class="box">
										<h3>Los mejores coches de ocasión</h3>
										<!-- <span>Es ahora</span> -->
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</section>



	<section id="slider_services">
		
		<div class="container">

			<?php
			$db = new Database;
			$items = [];

			$query_home = "SELECT * FROM coches ORDER BY id_coche DESC LIMIT 6";
			try{

				$query = $db->connect()->query($query_home);
				while($row = $query->fetch()){
					array_push($items, $row);
				}

			} catch(PDOException $e){
				echo $e;
			}

			// echo '<pre>';
			// print_r($items);
			// echo '</pre>';
			?>


			<h2>Últimos vehículos</h2>
			<div id="service_slider" class="splide">
		
				<div class="splide__track">
					<ul class="splide__list">

						<?php
						if ($items){

							foreach ($items as $item){

								// Sacar el nombre de la marca
								$items_marca = [];
								$query_marca = $db->connect()->query("SELECT nombre FROM marcas WHERE id_marca = {$item['id_marca']}");
								while($row = $query_marca->fetch()){
									array_push($items_marca, $row);
								}
								?>

								<li class="splide__slide">
									<a href="<?php echo constant('FRONTURL'); ?>coche/<?php echo $item['id_coche'];?>">
										<div class="splide__slide__container">
											<img src="<?php echo constant('PUBLIC_UPLOADS_COCHES_URL'); ?><?php echo $item['foto'] ?>">	
										</div>
										<div class="splide_slide_box">
											<div class="splide_slide_box_title"><?php echo $items_marca[0]['nombre'] ;?> <?php echo $item['modelo'];?></div>
											<div class="splide_slide_box_price"><?php echo $item['precio'];?> €</div>
										</div>
									</a>
								</li>
								<?php
							}
						}
						?>

					</ul>
				</div>
		
			</div>
			<div class="slider_btn btn">
				<a href="<?php echo constant('FRONTURL'); ?>coches/">Encuentra tu vehículo ideal</a>
			</div>
		</div>
	</section>

	<section id="info">
		<div class="container">

			<h2>Nuestras Marcas</h2>

			<div id="marcas_box">

				<?php
				$db = new Database;
				$marcas = [];

				$query_marcas = 'SELECT * FROM marcas';
				try{

					$query = $db->connect()->query($query_marcas);
					while($row = $query->fetch()){
						array_push($marcas, $row);
					}

				} catch(PDOException $e){
					echo $e;
				}
				

				if ($marcas){
					foreach ($marcas as $item){

						?>
						<div class="marca_item">
							<a href="coches/marca/<?php echo $item["id_marca"] ?>">
								<img src="<?php echo constant('PUBLIC_UPLOADS_URL'); ?><?php echo $item['logo'] ?>">
							</a>
						</div>
						<?php
					}
				}
				?>
				
			</div>

		</div>
	</section>

</main>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {

	/* Slider general */
	var splide_image = new Splide( '#image_slider', {
		type   : 'loop',
		perPage: 1,

	} );

	splide_image.mount();

	/* Slider servicios */
	var splide_service = new Splide( '#service_slider', {
		type   : 'loop',
		perPage: 4,
		gap:'20px',
		pagination: false,
		breakpoints: {
			575: {
				perPage: 1,
			},
			768: {
				perPage: 2,
			},
			1200: {
				perPage: 3,
			},
		},
	} );

	splide_service.mount();

	} );
</script>