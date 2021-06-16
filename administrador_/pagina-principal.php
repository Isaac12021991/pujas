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

		$pagina_prin="SELECT * FROM pagina_principal ";
		$pagina_prin_=mysqli_query($mysqli,$pagina_prin);

		$result = 0;
		$result = mysqli_num_rows($pagina_prin_);
		if ($result > 0) {

			while ($user=mysqli_fetch_row($pagina_prin_)){

				$id_principal =$user[0];
				$reglamentos=$user[1]; 
				$condiciones=$user[2];

				$reglamentos2=substr($user[1], 0, 350); 
				$condiciones2=substr($user[2], 0, 350);
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
						<li class="breadcrumb-item active"><a href="pagina-principal">Pagina principal</a></li>
					</ol>
				</div>
				<div class="row">

					<div class="col-xl-6">
						<div class="card text-white bg-primary">
							<div class="card-header">
								<h5 class="card-title text-white">REGLAMENTOS</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text"><?php echo nl2br($reglamentos2) ?>...</p>
							</div>
							<div class="card-footer bg-transparent border-0 text-white"><button data-toggle="modal" data-target="#reglamento2" class="btn btn-info">EDITAR REGLAMENTO</button>
							</div>


							<script>

								function usuarioInteractuo(){
									var btn = document.getElementById('actualizar-reglamento');
									btn.disabled=false;
								}

								function deshabilitarBoton(){
									var btn = document.getElementById('actualizar-reglamento');
									btn.disabled=false;
								}

							</script>

							<div class="modal fade" id="reglamento2">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">REGLAMENTO</h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<div class="modal-body">
											
											<textarea class="form-control" id="reglamento" onkeyup="usuarioInteractuo()" rows="18" name="reglamento" placeholder="Ingresa el reglamento"><?php echo $reglamentos ?></textarea>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
											<button type="button" id="actualizar-reglamento" onclick="deshabilitarBoton()"  disabled="true" class="btn btn-primary">Guardar reglamento</button>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								<h5 class="card-title text-white">CONDICIONES</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text"><?php echo nl2br($condiciones2) ?>...</p>
							</div>
							<div class="card-footer bg-transparent border-0 text-white"><button data-toggle="modal" data-target="#condiciones2" class="btn btn-info">EDITAR CONDICIONES</button>
							</div>

							<script>

								function usuarioInteractuo2(){
									var btn = document.getElementById('actualizar-condiciones');
									btn.disabled=false;
								}

								function deshabilitarBoton2(){
									var btn = document.getElementById('actualizar-condiciones');
									btn.disabled=false;
								}

							</script>

							<div class="modal fade" id="condiciones2">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">CONDICIONES</h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<div class="modal-body">
											
											<textarea class="form-control" id="condiciones" onkeyup="usuarioInteractuo2()" rows="18" name="condiciones" placeholder="Ingresa las condiciones"><?php echo $condiciones ?></textarea>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
											<button type="button" id="actualizar-condiciones" onclick="deshabilitarBoton2()"  disabled="true" class="btn btn-primary">Guardar condiciones</button>
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
	<script src="validaciones_/_pagina-principal/js/reglamento-editar.js"></script>
	<script src="validaciones_/_pagina-principal/js/condiciones-editar.js"></script>
	<!--**************************Scripts*******************************-->






</body>

</html>