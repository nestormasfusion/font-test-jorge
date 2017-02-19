<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Control the behavior of search engine crawling and indexing -->
	<meta name="robots" content="index,follow,noodp"><!-- All Search Engines -->
	<meta name="googlebot" content="index,follow"><!-- Google Specific -->
	<!-- Does the same function as the keywords tag -->
	<meta name="category" content="">

	<!--FAVICONS-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>:: BUILD ::</title>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<!--HEADER-->
	<?php include 'elements/header.php'; ?>

	<section class="section">
		<!--SLIDER-->
		<div class="owl-carousel" id="main-slider">
			<?php for ($i=0; $i < 5; $i++) :?>
			<!--ITEM-->
			<div class="item" style="background-image: url(images/bg.jpg);">
				<div class="main-slider__container">
					<h1>SOLUCIONES CONSTRUCTIVAS <span>SUSTENTABLES</span></h1>
					<p>Nuestro objetivo es la calidad de vida de la gente a traves de construcciones sustentables, calidad y seguridad Lider en Proyectos LEED</p>
				</div>
			</div>
			<?php endfor; ?>
			<!--ITEM-->
		</div>
		<!--SLIDER-->
	</section>

	<main class="main" role="main">
		<!--PROJECTS-->
		<div class="section-projets">
			<div class="section-projets__header">
				<h2>BUILD  Building Systems</h2>
				<p>Construimos mas de 700,000 m2 por año en edificios verticales.</p>

				<div class="container">
					<!--TABS-->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#1" aria-controls="1" role="tab" data-toggle="tab">
								<i class="fa fa-industry" aria-hidden="true"></i>N. Industriales
							</a>
						</li>
						<li role="presentation">
							<a href="#2" aria-controls="2" role="tab" data-toggle="tab">
								<i class="fa fa-building" aria-hidden="true"></i>Edificios
							</a>
						</li>
						<li role="presentation">
							<a href="#3" aria-controls="3" role="tab" data-toggle="tab">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>P. Comerciales
							</a>
						</li>
						<li role="presentation">
							<a href="#4" aria-controls="4" role="tab" data-toggle="tab">
								<i class="fa fa-road" aria-hidden="true"></i>Infraestructura
							</a>
						</li>
						<li role="presentation">
							<a href="#5" aria-controls="5" role="tab" data-toggle="tab">
								<i class="fa fa-shopping-bag" aria-hidden="true"></i>Retail
							</a>
						</li>
					</ul>
					<!--TABS-->
				</div><!--container-->
			</div><!--header-->

			<div class="container">
			<!--PANEL-->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="1">
					<!--Carousel-->
					<div class="owl-carousel" id="carousel">
						<?php for ($i=0; $i < 9; $i++) :?>
						<!--ITEM-->
						<div class="item">
							<div class="item__image" style="background-image: url(images/obras.jpg);"></div>
							<div class="item__text">
								<h4>NAVE INDUSTRIAL PPIZ4</h4>
								<p><span>· Cuautitlan, Izcalli ·</span></p>
								<p>Estructura metálica y cubierta.<br>Área 68,000 m2</p>
							</div>
						</div>
						<!--ITEM-->
						<?php endfor; ?>
					</div>
					<!--Carousel-->
				</div>
				<div role="tabpanel" class="tab-pane" id="2">
					..
				</div>
				<div role="tabpanel" class="tab-pane" id="3">
					..
				</div>
				<div role="tabpanel" class="tab-pane" id="4">
					..
				</div>
				<div role="tabpanel" class="tab-pane" id="5">
					..
				</div>
			</div>
			<!--PANEL-->
			</div>
		</div>
		<!--PROJECTS-->

		<!--ABOUT-->
		<div class="section-about">
			<div class="row">
				<!--DISEÑO-->
				<div class="col-md-6 bg-accent-light">
					<div class="section-about__item">
						<h4><img src="images/design.png" alt="">DISEÑO & CONSTRUCCIÓN</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!--DISEÑO-->

				<!--TIEMPO-->
				<div class="col-md-6">
					<div class="section-about__item">
						<h4><img src="images/tiempo.png" alt="">ENTREGA A TIEMPO</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
					</div>
				</div>
				<!--TIEMPO-->
			</div><!--row-->

			<div class="row">
				<!--SEGURIDAD-->
				<div class="col-md-6">
					<div class="section-about__item">
						<h4><img src="images/seguridad.png" alt="">SEGURIDAD</h4>
						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					</div>
				</div>
				<!--SEGURIDAD-->

				<!--BIM-->
				<div class="col-md-6 bg-accent-light">
					<div class="section-about__item">
						<h4><img src="images/bim.png" alt="">BIM<span>(Building Information System)</span></h4>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
					</div>
				</div>
				<!--BIM-->

			</div><!--row-->
		</div>
		<!--ABOUT-->

		<!--CONTACT-->
		<div class="section-contact">
			<div class="banner"></div>
			<!--container-->
			<div class="section-contact__container">
				<h2>¡CUÉNTANOS TU PROYECTO!</h2>
				<p>Estamos listos para ayudarte a construir tus sueños</p>
				<!--form-->
				<form action="#" method="POST" accept-charset="utf-8">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
					</div>
					<div class="row">
						<div class="col-md-6 end--left">
							<div class="form-group">
								<input type="text" name="puesto" class="form-control" placeholder="Puesto" required>
							</div>
						</div>
						<div class="col-md-6 end--right">
							<div class="form-group">
								<input type="text" name="empresa" class="form-control" placeholder="Empresa" required>
							</div>
						</div>
					</div><!--row-->
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
					</div>
					<div class="form-group">
						<input type="tel" name="empresa" class="form-control" placeholder="Teléfono" required>
					</div>
					<div class="form-group">
						<select name="proyecto"  class="selectpicker" title="Tipo de proyecto">
							<option value="">N. Industriales</option>
							<option value="">Edificios</option>
							<option value="">P. Comerciales</option>
							<option value="">Infraestructura</option>
							<option value="">Retail</option>
						</select>
					</div>
					<div class="form-group">
						<textarea name="mensaje" class="form-control" placeholder="Cuéntanos, dejanos un mensaje" required rows="5"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</form>
				<!--form-->
			</div>
			<!--container-->
		</div>
		<!--CONTACT-->
	</main>

	<!--FOOTER-->
	<?php include 'elements/footer.php'; ?>

	<!--JS-->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/framework.min.js" type="text/javascript"></script>
	<script src="js/plugins.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

</body>
</html>
