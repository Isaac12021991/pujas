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




		<?php

		require("../conexion_/conexion.php");

		$reglas_="SELECT * FROM reglas_sala ";
		$reglas=mysqli_query($mysqli,$reglas_);

		$result = 0;
		$result = mysqli_num_rows($reglas);
		if ($result > 0) {

			while ($sala=mysqli_fetch_row($reglas)){

				$id_regla=$sala[0];
				$campo1=$sala[1]; 
				$campo2=$sala[2];
				$campo3=$sala[3]; 
				$campo4=$sala[4];
				$campo5=$sala[5]; 
				$campo6=$sala[6];

			}

		}else{


		}

		?>


		<!--********************************** Content ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index">Inicio</a></li>
						<li class="breadcrumb-item active"><a href="pagina-principal">Reglas de puja</a></li>
					</ol>
				</div>
				<div class="row">


					<div class="col-xl-12">
						<div class="card text-white bg-danger">


							<div class="card-header">
								<h5 class="card-title text-white">REGLAS DE PUJA</h5>
							</div>
							<div class="card-body mb-0">


								<div class="col-md-12">

									<table class="table">
										<thead style="background-color: #C48C23; color: white;">
											<tr>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo1) ?></th>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo3) ?></th>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo5) ?></th>
											</tr>
										</thead>
										<tbody style="background-color: #C48C23; color: white;">
											<tr>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo2) ?></th>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo4) ?></th>
												<th style="border: black 1px solid; font-size: 12px;"><?php echo nl2br($campo6) ?></th>
											</tr>
										</tbody>
									</table>

								</div>

								<div class="card-footer bg-transparent border-0 text-white"><button data-toggle="modal" data-target="#reglamento2" class="btn btn-success btn-block">EDITAR REGLAMENTO</button>
								</div>
							</div>

							<script>

								function usuarioInteractuo(){
									var btn = document.getElementById('actualizar-reglas');
									btn.disabled=false;
								}

								function deshabilitarBoton(){
									var btn = document.getElementById('actualizar-reglas');
									btn.disabled=false;
								}

							</script>

							<div class="modal fade" id="reglamento2">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">REGLAS DE LA SALA</h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<div class="modal-body">
											
											<div class="row">

												<div class="col">
													<label>Campo 1</label>
													<textarea type="text" class="form-control" rows="4" id="campo1" name="campo1" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo1) ?></textarea>
												</div>

												<div class="col">
													<label>Campo 2</label>
													<textarea type="text" class="form-control" rows="4" id="campo2" name="campo2" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo2) ?></textarea>
												</div>

											</div>


											<div class="row">

												<div class="col">
													<label>Campo 3</label>
													<textarea type="text" class="form-control" rows="4" id="campo3" name="campo3" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo3) ?></textarea>
												</div>

												<div class="col">
													<label>Campo 4</label>
													<textarea type="text" class="form-control" rows="4" id="campo4" name="campo4" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo4) ?></textarea>
												</div>

											</div>


											<div class="row">

												<div class="col">
													<label>Campo 5</label>
													<textarea type="text" class="form-control" rows="4" id="campo5" name="campo5" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo5) ?></textarea>
												</div>

												<div class="col">
													<label>Campo 6</label>
													<textarea type="text" class="form-control" rows="4" id="campo6" name="campo6" onkeyup="usuarioInteractuo()"><?php echo nl2br($campo6) ?></textarea>
												</div>

											</div>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
											<button type="button" id="actualizar-reglas" onclick="deshabilitarBoton()"  disabled="true" class="btn btn-primary">Guardar reglas</button>
										</div>
									</div>
								</div>
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
	<script src="validaciones_/_reglas-salas/js/reglamento-editar.js"></script>
	<!--**************************Scripts*******************************-->






</body>

</html>