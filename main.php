
<!-- MAIN CONTAINER -->
<main id="main_container">
	
	<section id="slider_main">
		<div id="slider">
			<div id="image_slider" class="splide">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide" style="background: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.4)), url('img/slide01.png'); background-size: cover;">
							<div class="container">
								<div class="slider_text_box">
									<div class="box">
										<h3>Tenemos tu coche ideal</h3>
										<!-- <span>Es ahora</span> -->
									</div>
								</div>
							</div>
						</li>
						<li class="splide__slide" style="background: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.4)), url('img/slide04.png'); background-size: cover;">
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

			$query_home = 'SELECT * FROM coches ORDER BY "id" DESC';
			try{

				$query = $db->connect()->query($query_home);
				while($row = $query->fetch()){
					array_push($items, $row);
				}

			} catch(PDOException $e){
				echo $e;
			}

			echo '<pre>';
			print_r($items);
			echo '</pre>';
			?>









			<h2>Últimos vehículos</h2>
			<div id="service_slider" class="splide">
		
				<div class="splide__track">
					<ul class="splide__list">

					
						
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/03.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/04.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/05.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/06.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/01.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>
						<li class="splide__slide">
							<a href="#">
								<div class="splide__slide__container">
									<img src="img/test/02.jpg">	
								</div>
								<div class="splide_slide_box">
									<div class="splide_slide_box_title">BMW Serie 1</div>
									<div class="splide_slide_box_price">12.000 €</div>
								</div>
							</a>
						</li>

					</ul>
				</div>
		
			</div>
			<div class="slider_btn btn">
				<a href="#">Encuentra tu vehículo ideal</a>
			</div>
		</div>
	</section>

	<section id="info">
		<div class="container">
			<h2>Nuestras Marcas</h2>


			<div id="marcas_box">

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/bmw.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/citroen.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/dacia.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/ford.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/kia.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/opel.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/peugeot.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/renault.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/seat.png"></a>
				</div>

				<div class="marca_item">
					<a href="#"><img src="img/test/logos/toyota.png"></a>
				</div>
				
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