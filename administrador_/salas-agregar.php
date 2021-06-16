<?php

session_start();
if (@!$_SESSION['usuario']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
	header("Location:desconectar");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>LATIN CLUB</title>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.jpeg">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/LineIcons.css" rel="stylesheet">
	<link href="css/style-p.css" rel="stylesheet">
	<link href="css/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<!--****** Preloader ******-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--****** Preloader ******-->


	<div id="main-wrapper">

		<!--******* Nav header ***********-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<img class="logo-abbr CEL" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
				<img class="logo-compact PC" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
				<img class="brand-title PC" src="img/logo.jpeg" alt="" style="border-radius: 70px;">
			</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--******* Nav header ***********-->



		<!--****** Header ******-->
		<?php include'include/header.php'?>	
		<!--****** Header ******-->


		<!--****** Sidebar ******-->
		<?php include'include/sidebar.php'?>	
		<!--****** Sidebar ******-->



		<!--********************************** Content ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="pagina-principal">Nuevo remate</a></li>
					</ol>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card text-white bg-dark">
							<div class="card-header">
								<h5 class="card-title text-white">CREAR NUEVO REMATE</h5>
							</div>
							<div class="card-body mb-0">
								

								<form method="POST">

									<div class="modal-body">

										<div class="form-row">
											<div class="form-group col-md-12">
												<center>INFORMACIÓN DEL REMATE</center>
											</div>
										</div>

										<hr>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Numero de carrera</label>
												<input type="number" id="numero_sala" name="numero_sala" class="form-control" placeholder="Ingresa el numero de carrera">
											</div>
											<div class="form-group col-md-6">
												<label>Tipo de remate</label>
												<select id="tipo_remate" name="tipo_remate" class="form-control">
													<option value="">Ingresa una opción...</option>
													<option value="NACIONAL">NACIONAL</option>
													<option value="INTERNACIONAL">INTERNACIONAL</option>
												</select>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Anuncio de ventana 1</label>
												<textarea type="text" id="anuncio1" name="anuncio1" class="form-control" placeholder="Este anuncio aparecera en el campo del remate"></textarea>
											</div>
											<div class="form-group col-md-6">
												<label>Anuncio de ventana 2</label>
												<textarea type="text" id="anuncio2" name="anuncio2" class="form-control" placeholder="Este anuncio aparecera en el campo del remate"></textarea>
											</div>
											<div class="form-group col-md-6">
												<label>Hipodromo</label>
												<input type="text" id="hipodromo" name="hipodromo" class="form-control" placeholder="Hipodromo">
											</div>
											<div class="form-group col-md-6">
												<label>Distancia</label>
												<input type="text" id="distancia" name="distancia" class="form-control" placeholder="Distancia">
											</div>
											<div class="form-group col-md-6">
												<label>Pote tablazo</label>
												<input type="number" id="pote_tablazo" name="pote_tablazo" class="form-control" placeholder="Ingresa el pote tablazo">
											</div>
											<div class="form-group col-md-6">
												<label>Pote</label>
												<input type="number" id="pote" name="pote" class="form-control" placeholder="Ingresa el pote">
											</div>
										</div>

										<hr>

										<div class="form-row">
											<div class="form-group col-md-12">
												<center>INFORMACIÓN DE LA TABLA</center>
											</div>
										</div>

										<hr>

										<div class="form-row">

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #1</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar1" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #2</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar2" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #3</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar3" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #4</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar4" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>


											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #5</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar5" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #6</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar6" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #7</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar7" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #8</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar8" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>


											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #9</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar9" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #10</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar10" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #11</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar11" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #12</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar12" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>


											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #13</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar13" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>

											<div class="col-md-3">
												<div class="card">
													<ul class="list-group list-group-flush">
														<center>
															<li class="list-group-item">Campo #14</li>
															<li class="list-group-item">
																<label>Nombre del ejemplar</label>
																<input type="text" id="nombre_ejemplar14" class="form-control" placeholder="Nombre del ejemplar">
															</li>
														</center>
													</ul>
												</div>
											</div>


										</div>



									</div>
									<div class="modal-footer">
										<a href="salas"><button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button></a>
										<button type="button" id="sala-agregar" class="btn btn-primary">Agregar</button>
									</div>

								</form>




							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--********************************** Content ***********************************-->



		<!--****** Footer ******-->
		<?php include'include/footer.php'?>	
		<!--****** Footer ******-->



	</div>


	<!--**************************Scripts*******************************-->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>	
	<script src="js/sweetalert2.min.js"></script>
	<script src="validaciones_/_salas/js/sala-agregar.js"></script>
	<!--**************************Scripts*******************************-->






</body>

</html>