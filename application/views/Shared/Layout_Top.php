<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Urb. Villa Real</title>
	<link rel="stylesheet" type="text/css" href="../Content/CSS/Main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-menu-carousel">
		<!-- HEADER-->
		<div class="container">
			<div class="container-header row justify-content-center">
				<div class="container-logo col-sm-2 offset-sm-1">
					<img src="../Content/Images/IconLogo.png">
				</div>
				<div class="container-nombre col-sm-7">
					Altos de  <strong> Villa Real</strong>
				</div>
				<div class="container-ingresar col-sm-2 align-self-end text-right">
					<a href="">Ingresar</a>
				</div>
			</div>
		</div>
	<!-- SLIDER CAROUSEL -->
	<div class="col-sm-10 offset-1">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<!-- Altura de 326px -->
		      <img class="d-block w-100" src="../Content/Images/Cancha.jpg" alt="First slide">
		        <div class="carousel-caption d-none d-md-block">
		    		<h1>Cancha de Fútbol</h1>
		  		</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="../Content/Images/piscina.jpg" alt="First slide">
		        <div class="carousel-caption d-none d-md-block">
		    		<h1>Piscina de Niños</h1>
		  		</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="../Content/Images/parque.jpg" alt="First slide">
		        <div class="carousel-caption d-none d-md-block">
		    		<h1>Parque Infantil</h1>
		  		</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<div class="container">
	<div class="container-menu-post row">
			<!-- MENU IZQ -->
			<div class="container-menu col-sm-2">
				<ul>
					<li>
						<a href="<?php echo site_url() ?>/Inicio">
							<img src="../Content/Images/inicio.png" alt="">
							Inicio
						</a>
					</li>
					<li>
							<a href="<?php echo site_url() ?>/Reservas">
								<img src="../Content/Images/Reservas.png" alt="">
								Reservas</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/Pqrs">
							<img src="../Content/Images/mensajes.png" alt="">
							PQRS</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/Eventos">
							<img src="../Content/Images/mensajes.png" alt="">
							Eventos</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/Pagos">
							<img src="../Content/Images/mensajes.png" alt="">
							Pagos</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/Facturas">
							<img src="../Content/Images/mensajes.png" alt="">
							Factura</a>
					</li>
					<li>
						<a class="item-menu" data-toggle="collapse" href="#collapseDocumentos" aria-controls="collapseDocumentos">
							<img src="../Content/Images/descargar.png" alt="">
							Documentos</a>
							<div class="collapse" id="collapseDocumentos">
								<ul class="documents">
									<li style="text-align: -webkit-right;"><a href="">Documento 1</a></li>
									<li style="text-align: -webkit-right;"><a href="">Documento 2</a></li>
									<li style="text-align: -webkit-right;"><a href="">Documento 3</a></li>
									<li style="text-align: -webkit-right;"><a href="">Documento 4</a></li>
								</ul>
							</div>
					</li>

				</ul>
			</div>
